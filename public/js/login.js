var  name="Անուն";
var sname="Ազգանուն";
var comanyName="Կազմակերպության անունը";
var companyAddress="Կազմակերպության հասցեն";
$('input[value="fizPerson"]').click(function () {
    document.querySelector(".Nname").innerHTML=name;
    document.querySelector(".Sname").innerHTML=sname;
    document.querySelector('input[value="legalPerson"]').checked=false;
    $("input[name='name']").css({"width":"199px"});
    $("input[name='surname']").css({"width":"238px"});
    $(".surname").css({"padding-left":"14px"});
})
$('input[value="legalPerson"]').click(function () {
    document.querySelector(".Nname").innerHTML=comanyName;
    document.querySelector(".Sname").innerHTML=companyAddress;
    document.querySelector('input[value="fizPerson"]').checked=false;
    $("input[name='name']").css({"width":"450px"});
    $("input[name='surname']").css({"width":"450px"});
    $(".surname").css({"padding-left":"0px"});
})