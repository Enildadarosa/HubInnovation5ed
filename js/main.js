// NECESSÁRIO PEGAR DO BACKEND E INSTANCIAR ESSA VARIAVEL
async function loadpalestras(){
    const response = await fetch('http://localhost/hubinnovation5ed/loadpalestras.php')
    const dados = await response.json()
    
    const newlist = dados.reduce((acc,item) => {
        acc[item.id_palestra] = {
            srcImagemPalestra: item.foto,
            titlePalestra: item.palestra,
            subtitlePalestra: item.nome_palestrante,
            descPalestra: item.descricao,
            palestrante: {
                nome: item.nome_palestrante,
            } 
        }
        return acc
    },{});
    return newlist
}


async function executar(){

const dataPalestras =  await loadpalestras()

console.log(dataPalestras)
    // {

//     // id: {}
//     "1":{

//         srcImagemPalestra:"./uploads/fotos/66fb496c5572d.jfif",
//         titlePalestra: "STEAM COM ARDUINO",
//         subtitlePalestra: "Thiago Almeida",
//         descPalestra: "     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. ",
//         palestrante: {
//             nome:"Thiago Almeida",
//         } 
//     },
//     "2":{

//         srcImagemPalestra:"./uploads/fotos/66fb496c5572d.jfif",
//         titlePalestra: "STEAM COM ARDUINO",
//         subtitlePalestra: "Thiago Almeida",
//         descPalestra: "     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. ",
//         palestrante: {
//             nome:"Thiago Almeida",
//         } 
//     },

// }

// TEXTOS SOBRE
// [0] = O QUE É 
// [1] = PARA QUEM
// [2] = POR QUE IR
const textsAbout = [
    "O Hub Innovation não é apenas um espaço físico; é uma incubadora de ideias e um catalisador para a transformação social e profissional. Localizado no coração da cidade, esse hub se destaca não só pela localização privilegiada, mas também por um ambiente que respira tecnologia e inovação. A estrutura é projetada para facilitar a interação e o compartilhamento de conhecimentos, promovendo a emancipação dos papéis individuais em um contexto que valoriza tanto a autonomia quanto a colaboração. É um local onde futuros líderes são forjados, novas ideias são concebidas e a inovação é uma constante. Cada canto do Hub está equipado para incentivar a criatividade e a inovação, tornando-o um ponto de encontro essencial para qualquer pessoa interessada em moldar o futuro. Investir seu tempo para conhecer o Hub Innovation é uma decisão que promete retornos significativos em crescimento pessoal e profissional.",
    "O Hub Innovation é um verdadeiro mosaico cultural e intelectual, aberto a pessoas de todas as idades, lugares e backgrounds. Este hub não se limita a ser apenas um espaço de trabalho, mas um ambiente de aprendizado e crescimento onde cada atividade e palestra é meticulosamente planejada para ser acessível e inclusiva. A diversidade é celebrada e encorajada, com eventos que vão desde workshops sobre as mais recentes tecnologias até seminários sobre saúde mental e bem-estar. Participar do Hub Innovation significa ter a liberdade de explorar seus interesses e paixões em um ambiente que apoia e nutre o desenvolvimento individual e coletivo. A filosofia do hub é que a educação e o desenvolvimento devem ser livres e espontâneos, permitindo que cada indivíduo descubra novas paixões e desenvolva habilidades de maneira orgânica e sustentável.",
    "Ao entrar no Hub Innovation, você imediatamente percebe que está entrando em um território onde o potencial é infinito. A energia do lugar é contagiante, com espaços vibrantes repletos de pessoas conversando, colaborando e criando. Aqui, você não apenas adquire um network robusto e diversificado, mas também se expõe a uma ampla gama de conhecimentos que atravessam disciplinas tradicionais. Desde aprendizados sobre estética e cuidados pessoais até oficinas avançadas sobre inteligência artificial e análise de dados, o Hub proporciona uma educação holística que prepara você para os desafios do mundo moderno. Além disso, ao frequentar o Hub Innovation, você tem a oportunidade de participar de projetos colaborativos, seminários de liderança e sessões de mentoria que são projetadas não apenas para ensinar, mas para transformar. Prepare-se para uma jornada de aprendizado e descoberta que vai além do convencional, expandindo suas perspectivas e aprimorando suas habilidades de maneira que poucos lugares podem oferecer."
];
 

const palestras_cards = document.querySelectorAll(".palestra_item")
palestras_cards.forEach(e => {  

    const id_palestra = e.getAttribute("palestra_id") 
    e.addEventListener('click',() => { 
        abrirModalSubscribe(dataPalestras[id_palestra],id_palestra) 
    }) 

})
const modalSubscribe = document.querySelector('.modalSubscribePalestra')

const abrirModalSubscribe = (data, idPalestra) => {  
    console.log(data)
    setDataModal(data,idPalestra)  
    modalSubscribe.classList.add("active")

}
const setDataModal = (data, idP) => {
    console.log(data)
    const img_card_palestra = document.getElementById("img_card_palestraModal")
    const titleCardPalestraSubscribe = document.getElementById("titleCardPalestraSubscribe")
    const subTitleCardPalestraSubscribe = document.getElementById("subTitleCardPalestraSubscribe")
    const img_palestranteSubscribe = document.getElementById("img_palestranteSubscribe")
    const titleHeaderSubscribe = document.getElementById("titleHeaderSubscribe")
    const subtitleHeaderSubscribe = document.getElementById("subtitleHeaderSubscribe")
    const aboutPalestraSubscribe = document.getElementById("aboutPalestraSubscribe")
    const nomePalestranteSubscribe = document.getElementById("nomePalestranteSubscribe") 
    const btnToSubscribeModalSimao100 = document.getElementById("btnToSubscribeModalSimao100")

    img_card_palestra.src = data.srcImagemPalestra
    titleCardPalestraSubscribe.innerText = data.titlePalestra
    subTitleCardPalestraSubscribe.innerText = data.subtitlePalestra
    img_palestranteSubscribe.src = data.palestrante.fotoSrc
    titleHeaderSubscribe.innerText = data.titlePalestra
    subtitleHeaderSubscribe.innerText = data.subtitlePalestra
    aboutPalestraSubscribe.innerText =  data.descPalestra
    nomePalestranteSubscribe.innerText = data.palestrante.nome 
    btnToSubscribeModalSimao100.addEventListener('click',(e) => {

        window.location.href = "newinscricao.php?id_palestra="+idP

    })

}


const closeButtonSubscribe = document.getElementById("closeButtonSubscribe") 
closeButtonSubscribe.addEventListener('click',(e) => {

    closeModalSubscribe()

})
const closeModalSubscribe = () => { 
    modalSubscribe.classList.remove("active")
}



const oqItemAbout = document.querySelector("#oqItemAbout")
const paraQuemItemAbout = document.querySelector("#paraQuemItemAbout")
const pqItemAbout = document.querySelector("#pqItemAbout")
const descAboutHub = document.getElementById("descAboutHub")


oqItemAbout.addEventListener("click",() => { 
    oqItemAbout.classList.add("active") 
    paraQuemItemAbout.classList.remove("active")
    pqItemAbout.classList.remove("active") 
    descAboutHub.innerText = textsAbout[0] 
})
paraQuemItemAbout.addEventListener("click",() => { 
    paraQuemItemAbout.classList.add("active")
    oqItemAbout.classList.remove("active") 
    pqItemAbout.classList.remove("active")   
    
    descAboutHub.innerText = textsAbout[1] 
})
pqItemAbout.addEventListener("click",() => { 
    pqItemAbout.classList.add("active")
    oqItemAbout.classList.remove("active") 
    paraQuemItemAbout.classList.remove("active") 
    descAboutHub.innerText = textsAbout[2]
})

const buttonAreaHamburguerNavBar = document.getElementById("buttonAreaHamburguerNavBar")
const yParte = document.getElementById("yParte")

buttonAreaHamburguerNavBar.addEventListener("click",() => { 
    yParte.classList.toggle("active") 
}) 



const observer = new IntersectionObserver(
    (entries) => {

    entries.forEach((entry) => {

    if(entry.isIntersecting){
        entry.target.classList.add('show');
    }
    else{
        entry.target.classList.remove('show')
    }
    });
});

const hiddenElements = document.querySelectorAll('.move')
hiddenElements.forEach((element) => {
    observer.observe(element)
})
    
}


executar()


// // {

// //     // id: {}
// //     "1":{

// //         srcImagemPalestra:"./uploads/fotos/66fb496c5572d.jfif",
// //         titlePalestra: "STEAM COM ARDUINO",
// //         subtitlePalestra: "Thiago Almeida",
// //         descPalestra: "     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. ",
// //         palestrante: {
// //             nome:"Thiago Almeida",
// //         } 
// //     },
// //     "2":{

// //         srcImagemPalestra:"./uploads/fotos/66fb496c5572d.jfif",
// //         titlePalestra: "STEAM COM ARDUINO",
// //         subtitlePalestra: "Thiago Almeida",
// //         descPalestra: "     Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla a dignissim tortor, ac aliquet nisi. Phasellus semper nec eros ut accumsan. ",
// //         palestrante: {
// //             nome:"Thiago Almeida",
// //         } 
// //     },

// // }

// // TEXTOS SOBRE
// // [0] = O QUE É 
// // [1] = PARA QUEM
// // [2] = POR QUE IR
// const textsAbout = [
//     "O Hub Innovation não é apenas um espaço físico; é uma incubadora de ideias e um catalisador para a transformação social e profissional. Localizado no coração da cidade, esse hub se destaca não só pela localização privilegiada, mas também por um ambiente que respira tecnologia e inovação. A estrutura é projetada para facilitar a interação e o compartilhamento de conhecimentos, promovendo a emancipação dos papéis individuais em um contexto que valoriza tanto a autonomia quanto a colaboração. É um local onde futuros líderes são forjados, novas ideias são concebidas e a inovação é uma constante. Cada canto do Hub está equipado para incentivar a criatividade e a inovação, tornando-o um ponto de encontro essencial para qualquer pessoa interessada em moldar o futuro. Investir seu tempo para conhecer o Hub Innovation é uma decisão que promete retornos significativos em crescimento pessoal e profissional.",
//     "O Hub Innovation é um verdadeiro mosaico cultural e intelectual, aberto a pessoas de todas as idades, lugares e backgrounds. Este hub não se limita a ser apenas um espaço de trabalho, mas um ambiente de aprendizado e crescimento onde cada atividade e palestra é meticulosamente planejada para ser acessível e inclusiva. A diversidade é celebrada e encorajada, com eventos que vão desde workshops sobre as mais recentes tecnologias até seminários sobre saúde mental e bem-estar. Participar do Hub Innovation significa ter a liberdade de explorar seus interesses e paixões em um ambiente que apoia e nutre o desenvolvimento individual e coletivo. A filosofia do hub é que a educação e o desenvolvimento devem ser livres e espontâneos, permitindo que cada indivíduo descubra novas paixões e desenvolva habilidades de maneira orgânica e sustentável.",
//     "Ao entrar no Hub Innovation, você imediatamente percebe que está entrando em um território onde o potencial é infinito. A energia do lugar é contagiante, com espaços vibrantes repletos de pessoas conversando, colaborando e criando. Aqui, você não apenas adquire um network robusto e diversificado, mas também se expõe a uma ampla gama de conhecimentos que atravessam disciplinas tradicionais. Desde aprendizados sobre estética e cuidados pessoais até oficinas avançadas sobre inteligência artificial e análise de dados, o Hub proporciona uma educação holística que prepara você para os desafios do mundo moderno. Além disso, ao frequentar o Hub Innovation, você tem a oportunidade de participar de projetos colaborativos, seminários de liderança e sessões de mentoria que são projetadas não apenas para ensinar, mas para transformar. Prepare-se para uma jornada de aprendizado e descoberta que vai além do convencional, expandindo suas perspectivas e aprimorando suas habilidades de maneira que poucos lugares podem oferecer."
// ];
 

// const palestras_cards = document.querySelectorAll(".palestra_item")
// palestras_cards.forEach(e => {  

//     const id_palestra = e.getAttribute("palestra_id") 
//     e.addEventListener('click',() => { 
//         abrirModalSubscribe(dataPalestras[id_palestra],id_palestra) 
//     }) 

// })
// const modalSubscribe = document.querySelector('.modalSubscribePalestra')

// const abrirModalSubscribe = (data, idPalestra) => {  
//     console.log(data)
//     setDataModal(data,idPalestra)  
//     modalSubscribe.classList.add("active")

// }
// const setDataModal = (data, idP) => {
//     console.log(data)
//     const img_card_palestra = document.getElementById("img_card_palestraModal")
//     const titleCardPalestraSubscribe = document.getElementById("titleCardPalestraSubscribe")
//     const subTitleCardPalestraSubscribe = document.getElementById("subTitleCardPalestraSubscribe")
//     const img_palestranteSubscribe = document.getElementById("img_palestranteSubscribe")
//     const titleHeaderSubscribe = document.getElementById("titleHeaderSubscribe")
//     const subtitleHeaderSubscribe = document.getElementById("subtitleHeaderSubscribe")
//     const aboutPalestraSubscribe = document.getElementById("aboutPalestraSubscribe")
//     const nomePalestranteSubscribe = document.getElementById("nomePalestranteSubscribe") 
//     const btnToSubscribeModalSimao100 = document.getElementById("btnToSubscribeModalSimao100")

//     img_card_palestra.src = data.srcImagemPalestra
//     titleCardPalestraSubscribe.innerText = data.titlePalestra
//     subTitleCardPalestraSubscribe.innerText = data.subtitlePalestra
//     img_palestranteSubscribe.src = data.palestrante.fotoSrc
//     titleHeaderSubscribe.innerText = data.titlePalestra
//     subtitleHeaderSubscribe.innerText = data.subtitlePalestra
//     aboutPalestraSubscribe.innerText =  data.descPalestra
//     nomePalestranteSubscribe.innerText = data.palestrante.nome 
//     btnToSubscribeModalSimao100.addEventListener('click',(e) => {

//         window.location.href = "newinscricao.php?id_palestra="+idP

//     })

// }


// const closeButtonSubscribe = document.getElementById("closeButtonSubscribe") 
// closeButtonSubscribe.addEventListener('click',(e) => {

//     closeModalSubscribe()

// })
// const closeModalSubscribe = () => { 
//     modalSubscribe.classList.remove("active")
// }



// const oqItemAbout = document.querySelector("#oqItemAbout")
// const paraQuemItemAbout = document.querySelector("#paraQuemItemAbout")
// const pqItemAbout = document.querySelector("#pqItemAbout")
// const descAboutHub = document.getElementById("descAboutHub")


// oqItemAbout.addEventListener("click",() => { 
//     oqItemAbout.classList.add("active") 
//     paraQuemItemAbout.classList.remove("active")
//     pqItemAbout.classList.remove("active") 
//     descAboutHub.innerText = textsAbout[0] 
// })
// paraQuemItemAbout.addEventListener("click",() => { 
//     paraQuemItemAbout.classList.add("active")
//     oqItemAbout.classList.remove("active") 
//     pqItemAbout.classList.remove("active")   
    
//     descAboutHub.innerText = textsAbout[1] 
// })
// pqItemAbout.addEventListener("click",() => { 
//     pqItemAbout.classList.add("active")
//     oqItemAbout.classList.remove("active") 
//     paraQuemItemAbout.classList.remove("active") 
//     descAboutHub.innerText = textsAbout[2]
// })

// const buttonAreaHamburguerNavBar = document.getElementById("buttonAreaHamburguerNavBar")
// const yParte = document.getElementById("yParte")

// buttonAreaHamburguerNavBar.addEventListener("click",() => { 
//     yParte.classList.toggle("active") 
// }) 



// const observer = new IntersectionObserver(
//     (entries) => {

//     entries.forEach((entry) => {

//     if(entry.isIntersecting){
//         entry.target.classList.add('show');
//     }
//     else{
//         entry.target.classList.remove('show')
//     }
//     });
// });

// const hiddenElements = document.querySelectorAll('.move')
// hiddenElements.forEach((element) => {
//     observer.observe(element)
// })