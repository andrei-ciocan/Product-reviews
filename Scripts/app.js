(function(){
var app=angular.module("App",[]);

app.controller("ReviewController", function(){
this.reviews= reviewsTemplates;
});

app.controller("ReviewCreator", function(){
this.review={};
	this.addReview = function(something){
		something.push(this.review);
		this.review={};
	}
});

var reviewsTemplates=[
{
reviewerName:"Gigi Lupulescu",
reviewerEmail:"gigi.lupulescu@mail.com",
reviewerPhoto:"photoplaceholder.png",
reviewContent:"Ma ajuta sa imi rezolv ambele probleme in acelasi timp! Ma ajuta sa imi rezolv ambele probleme in acelasi timp! Ma ajuta sa imi rezolv ambele probleme in acelasi timp! Ma ajuta sa imi rezolv ambele probleme in acelasi timp! Ma ajuta sa imi rezolv ambele probleme in acelasi timp!",
rating:"3",
},
{
reviewerName:"Vasile Georgescu",
reviewerEmail:"vasile.georgescu@mail.com",
reviewerPhoto:"photoplaceholder.png",
reviewContent:"Aiurea produsul! Nu-l cumparati",
rating:"2",
}
]



})();