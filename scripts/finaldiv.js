$('.btndiv').click(function () { 
   
console.log("clic");
    window.open('whatsapp://send?text=Hello click on the link below to get free cas price'+$('#affiliatelink').html());
});