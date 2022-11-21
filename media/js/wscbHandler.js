//$("#chat-boat .input").hide();

$(".chats").append(`
	<ul class="chat-buttons">
	<li class="chat-button" style='float:left;'><div><span id="helloButton">Hey !</span></div></li>
	</ul>`);

$("#helloButton").click(function(e){
	$("helloButton").off("click");
	$("#chat-boat .input input[type='text']").val("Hey !");
	$("#chat-boat .input input[type='submit']").trigger('click');
})