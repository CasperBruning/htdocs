$(document).ready(()=> {


    $(".menu-toggle").on("click", () => {
        $(".menuLI").css('display', 'none')
    })


    $(`.caseOptions`).addClass("hide")
    $(`input[name=myradio]`).on('click', ()=>{
        let elementname = ($(`input[name=myradio]:checked`).val())
        console.log(elementname)
        $(`.caseOptions`).removeClass("hide")
        $(`.microatx`).addClass("hide")
        $(`.placeholder`).addClass("hide")
        $(`.miniitx`).addClass("hide")
        $(`.atx`).addClass("hide")
        $("."+elementname).removeClass("hide")
    })

    $(`.amd`).addClass("hide")
    $(`.intel`).addClass("hide")

    $(`input[name=myradio1]`).on('click', ()=>{
        let elementname = ($(`input[name=myradio1]:checked`).val())
        console.log(elementname)
        $(`.placeholder1`).addClass("hide")
        $(`.amd`).addClass("hide")
        $(`.intel`).addClass("hide")
        $("."+elementname).removeClass("hide")
    })

    $(`.nvidia`).addClass("hide")
    $(`.radeon`).addClass("hide")
    $(`input[name=myradio2]`).on('click', ()=>{
        let elementname = ($(`input[name=myradio2]:checked`).val())
        console.log(elementname)
        $(`.placeholder2`).addClass("hide")
        $(`.nvidia`).addClass("hide")
        $(`.radeon`).addClass("hide")
        $("."+elementname).removeClass("hide")
    })

    $(`.fanAmount`).on('click', function (){
        console.log()
    })

});