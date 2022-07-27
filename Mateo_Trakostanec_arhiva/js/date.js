document.addEventListener("DOMContentLoaded", function(){

    var datumVrijeme = new Date();
    var nazivMjeseca = ["Siječanj", "Veljača", "Ožujak", "Travanj", "Svibanj", "Lipanj", 
    "Srpanj", "Kolovoz", "Rujan", "Listopad", "Studeni", "Prosinac"];
    var trenutniDatum = datumVrijeme.getDate() + ". " +  nazivMjeseca[datumVrijeme.getMonth()] 
    + ". "  + datumVrijeme.getFullYear();  

    document.querySelector("#footer > span:first-of-type").innerHTML = trenutniDatum;
});

