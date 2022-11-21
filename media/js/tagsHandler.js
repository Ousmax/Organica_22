/*tagsDict = {
'Cleanses':[['type','cleanser'],'all'],
'Exfoliates':[['type':'exfoliator'],'all'],
'Nourishes':[['benefit':'nourish'],'all'],
'Hydrates':[['benefit','moistur'],'all'],
'Hair growth':[['benefit','grow'],'hair'],
'helps breakout':[['concern','acne'],'skin'],
'Hair growth':[['concern','ageing'],'skin']
};*/

tagsDict = {
'Cleanses':[['type',['cleanser']],'all'],
'Moisturizes':[['type',['moisturizer','balm','serum','cream']],'skin'],
'Exfoliates':[['type',['mask','exfoliator']],'skin'],
'Conditioner':[['type',['conditioner']],'hair'],
'Serum':[['type',['serum']],'all'],
'Bath':[['type',['bath']],'skin'],
'Spray':[['type',['spray']],'hair'],
'Toner':[['type',['toner']],'skin'],
'Balm':[['type',['balm']],'skin']
};

// initialProducts = [];

currentProducts = initialProducts;

selectedTags = [];

currentTags = possibleTags(currentProducts,currentCategory);

function showTags(currentTags){
	$("#tagsList").html("");
	for (var i = 0; i < currentTags.length; i++) {
		$("#tagsList").append("<a class='tag'>"+currentTags[i]+"</a>");
	}
}

function getSelectedTags(){
	selectedTags = [];
	$(".selectedTag").each(function(e){
		selectedTags.push($(this).html());
	})
	
	return selectedTags;
}

showTags(currentTags);

$(".tag").click(function(e){
	$(this).toggleClass('selectedTag');
	showProducts(filterByTags(getSelectedTags(),currentProducts,currentCategory));
})

function filterByTags(tags,products1,category){

	if(tags.length<1){
		tags = ['Cleanses','Moisturizes','Exfoliates','Conditioner','Serum','Bath','Spray','Toner','Balm'];
	}
	productsArray = [];

	for (var j = 0; j < products1.length; j++) {
		for (var i = 0; i < tags.length; i++) {
			tagi = tagsDict[tags[i]] ;
			tagindex = tagi[0][1].length-1;
			flag = 0
			while(flag == 0 && tagindex > -1){
				if( products1[j][tagi[0][0]].toLowerCase().includes(tagi[0][1][tagindex].toLowerCase()) ){
					flag=1;
					productsArray.push(products1[j]);
				}
				tagindex = tagindex-1
			}
			if(flag==1){
				break;
			}
		}
	}

	return productsArray;

}

function possibleTags(products1,category){

	tags1 = ['Cleanses','Moisturizes','Exfoliates','Conditioner','Serum','Bath','Spray','Toner','Balm'];

	if(category=='all'){
		tags = tags1;
	}else if(category == 'skin' || category == 'hair'){
		tags = [];
		for (var i = 0; i < tags1.length; i++) {
			if(tagsDict[tags1[i]][2]==category){
				tags.push(tags1[i]);
			}
		}
	}else{
		return []
	}

	tagsArray = [];
	
	for (var i = 0; i < tags.length; i++) {
		for (var j = 0; j < products1.length; j++) {
			tagi = tagsDict[tags[i]] ;
			tagindex = tagi[0][1].length-1;
			flag = 0

			while(flag == 0 && tagindex > -1){
				if( products1[j][tagi[0][0]].toLowerCase().includes(tagi[0][1][tagindex].toLowerCase()) ){
					flag=1;
					tagsArray.push(tags[i]);
				}
				tagindex = tagindex-1
			}
			if(flag==1){
				break;
			}
		}
	}

	return tagsArray;

}



/*Hair growth : hair only
helps breakouts : skin only
Anti-aging formula : skin only*/

