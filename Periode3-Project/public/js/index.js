$(document).ready(() => {


    $(".menu-toggle").on("click", () => {
        $(".menuLI").css('display', 'none')
    })

    //FORMAAT Select
    $(`.caseOptions`).addClass("hide")
    $(`.miniitx`).addClass("hide")
    $(`.microatx`).addClass("hide")
    $(`.atx`).addClass("hide")

    $(`input[name=myradio]`).on('click', () => {
        let elementname = ($(`input[name=myradio]:checked`).val())
        console.log(elementname)
        $(`.caseOptions`).removeClass("hide")
        $(`.microatx`).addClass("hide")
        $(`.placeholder`).addClass("hide")
        $(`.miniitx`).addClass("hide")
        $(`.atx`).addClass("hide")
        $("." + elementname).removeClass("hide")
    })

    $
    //CPU Select
    $(`.amd`).addClass("hide")
    $(`.intel`).addClass("hide")
    $(`input[name=myradio1]`).on('click', () => {
        let elementname = ($(`input[name=myradio1]:checked`).val())
        console.log(elementname)
        $(`.placeholder1`).addClass("hide")
        $(`.amd`).addClass("hide")
        $(`.intel`).addClass("hide")
        $("." + elementname).removeClass("hide")
    })

    //GPU Select
    $(`.nvidia`).addClass("hide")
    $(`.radeon`).addClass("hide")
    $(`input[name=myradio2]`).on('click', () => {
        let elementname = ($(`input[name=myradio2]:checked`).val())
        console.log(elementname)
        $(`.placeholder2`).addClass("hide")
        $(`.nvidia`).addClass("hide")
        $(`.radeon`).addClass("hide")
        $("." + elementname).removeClass("hide")
    })

    $(`.fanAmount`).on('click', function () {
        console.log()
    })

});