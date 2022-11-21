(function($) {

  var observers = [];

  $.event.special.domNodeInserted = {

    setup: function setup(data, namespaces) {
      var observer = new MutationObserver(checkObservers);

      observers.push([this, observer, []]);
    },

    teardown: function teardown(namespaces) {
      var obs = getObserverData(this);

      obs[1].disconnect();

      observers = $.grep(observers, function(item) {
        return item !== obs;
      });
    },

    remove: function remove(handleObj) {
      var obs = getObserverData(this);

      obs[2] = obs[2].filter(function(event) {
        return event[0] !== handleObj.selector && event[1] !== handleObj.handler;
      });
    },

    add: function add(handleObj) {
      var obs = getObserverData(this);

      var opts = $.extend({}, {
        childList: true,
        subtree: true
      }, handleObj.data);

      obs[1].observe(this, opts);

      obs[2].push([handleObj.selector, handleObj.handler]);
    }
  };

  function getObserverData(element) {
    var $el = $(element);

    return $.grep(observers, function(item) {
      return $el.is(item[0]);
    })[0];
  }

  function checkObservers(records, observer) {
    var obs = $.grep(observers, function(item) {
      return item[1] === observer;
    })[0];

    var triggers = obs[2];

    var changes = [];

    records.forEach(function(record) {
      if (record.type === 'attributes') {
        if (changes.indexOf(record.target) === -1) {
          changes.push(record.target);
        }

        return;
      }

      $(record.addedNodes).toArray().forEach(function(el) {
        if (changes.indexOf(el) === -1) {
          changes.push(el);
        }
      })
    });

    triggers.forEach(function checkTrigger(item) {
      changes.forEach(function(el) {
        var $el = $(el);

        if ($el.is(item[0])) {
          $el.trigger('domNodeInserted');
        }
      });
    });
  }

})(jQuery);

keywords = ["We've got ","Then i would recommend ","And that would be "];

cartkeywords = ["Done. I added "," to your bag"];

$(document).ready(function(e){

$(document).on("domNodeInserted", ".chat.left", function () {

	newMessage = $(this).find('span').html();

	for (var i = 0; i < keywords.length; i++) {
		if(newMessage.includes(keywords[i])){
			loadProductPageByName(newMessage.replace(keywords[i],""));
		}
	}

  if(newMessage.includes(cartkeywords[0]) && newMessage.includes(cartkeywords[1])){
      productName = newMessage;
      productName = productName.replace(cartkeywords[0],"");
      productName = productName.replace(cartkeywords[1],"");
      productName = productName.split(",")[0];
      addToCart(NametoId(productName));
      //loadProductPageByName(newMessage.replace(cartkeywords[1],""));
    }

});


})