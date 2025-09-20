// Lista de marcas
const marcasCarros = [
    "Audi","BMW","Chevrolet","Citroën","Fiat","Ford","Honda",
    "Hyundai","Jeep","Mercedes-Benz","Mitsubishi",
    "Nissan","Peugeot","Renault","Toyota",
    "Volkswagen","Volvo"
];

// Modelos mais populares no Brasil
const modelosCarrosBR = {
    Audi: ["A3","A4","A6","Q3","Q5","Q7","Q8","A1","A5","A8","TT","R8","S3","S4","S5","S6","S7","S8","Q2","e-tron"],
    BMW: ["Série 1","Série 3","Série 5","Série 7","X1","X3","X5","X7","X2","X4","X6","i3","i4","iX","M3","M4","M5","M6","Z4","iX3"],
    Chevrolet: ["Onix","Onix Plus","Tracker","S10","Spin","Montana","Cruze","Prisma","Trailblazer","Equinox","Camaro","Blazer","Cobalt","Captiva","Omega","Chevette","Kadett","Vectra","Zafira","Silverado"],
    Citroën: ["C3","C4 Cactus","C4 Lounge","C4","C5 Aircross","Berlingo","Jumpy","Aircross","C1","C2","C3 Aircross","C6","C8","Xsara","Picasso","Saxo","Nemo","Grand C4 Picasso","Jumper","Spacetourer"],
    Fiat: ["Argo","Cronos","Mobi","Uno","Palio","Strada","Toro","Punto","Siena","Fiorino","Bravo","Linea","Doblo","500","Idea","Ducato","Fiorino Cargo","Palio Weekend","Stilo","Palio Fire"],
    Ford: ["Ka","Ka Sedan","EcoSport","Ranger","Maverick","Fusion","Focus","Edge","Bronco","Fiesta","Explorer","Mustang","F-150","Courier","Mondeo","Taurus","Transit","F-250","EcoSport Storm","Ka Hatch"],
    Honda: ["Civic","Fit","HR-V","City","CR-V","WR-V","Accord","Fit Shuttle","Pilot","Jazz","Insight","CR-Z","Odyssey","Freed","S2000","Legend","Prelude","Element","Crosstour","Ridgeline"],
    Hyundai: ["HB20","Creta","Tucson","Santa Fe","i30","Elantra","Kona","Palissade","Veloster","i20","ix35","H1","H100","Genesis","Staria","Ioniq","Kona N","ix25","Accent","Santa Cruz"],
    Jeep: ["Renegade","Compass","Cherokee","Grand Cherokee","Wrangler","Gladiator","Commander","Patriot","Willys","Liberty","Trackhawk","Grand Wagoneer","SRT","Cherokee Trailhawk","Wrangler Rubicon","Gladiator Mojave","Compass Trailhawk","Renegade Sport","Wrangler Unlimited","Commander 2022"],
    "Mercedes-Benz": ["Classe A","Classe B","Classe C","Classe E","Classe S","Classe G","Classe GL","Classe GLA","Classe GLB","Classe GLC","Classe GLE","Classe GLS","CLA","CLS","AMG GT","Vito","Sprinter","EQC","EQA","EQB"],
    Mitsubishi: ["Lancer","Outlander","ASX","Pajero","Pajero Sport","Montero","Eclipse","Triton","L200","Space Wagon","Colt","Grandis","Mirage","Galant","i-MiEV","Xpander","Pajero Dakar","Outlander PHEV","Eclipse Cross","Lancer Evolution"],
    Nissan: ["March","Versa","Sentra","Kicks","Frontier","Altima","Maxima","370Z","GT-R","Leaf","Pathfinder","X-Trail","Juke","Murano","Navara","Note","NP300","Armada","Rogue","Note e-Power"],
    Peugeot: ["208","2008","3008","5008","Partner","Expert","308","508","RCZ","301","407","207","206","406","807","1007","HDi","Boxer","Bipper","Traveller"],
    Renault: ["Sandero","Logan","Duster","Kwid","Captur","Clio","Stepway","Koleos","Megane","Fluence","Twingo","Master","Trafic","Scénic","Laguna","Espace","Alaskan","Fuego","Safrane","Zoé"],
    Toyota: ["Corolla","Etios","Yaris","Hilux","SW4","RAV4","Camry","Land Cruiser","Prado","Aygo","Avensis","Sienna","4Runner","C-HR","Fortuner","Sequoia","Tundra","Prius","Highlander","Tacoma"],
    Volkswagen: ["Gol","Fox","Polo","Virtus","Voyage","T-Cross","Nivus","Tiguan","Jetta","Passat","Up","Amarok","Saveiro","Scirocco","Touareg","Arteon","Vento","Golf","Beetle","Kombi"],
    Volvo: ["XC40","XC60","XC90","S60","S90","V40","V60","V90","C40","C30","S40","S70","S80","V50","V70","240","740","850","960","XC70","Polestar 2"]
};

// Função para popular o select de marcas
document.addEventListener('DOMContentLoaded', function() {  
    const marcaSelect = document.getElementById("marca");
    const modeloSelect = document.getElementById("modelo");

    // Preencher select de marcas
    marcasCarros.forEach(marca => {
        const option = document.createElement("option");
        option.value = marca;
        option.textContent = marca;
        marcaSelect.appendChild(option);
    });

    // Quando escolher uma marca, preencher modelos
    marcaSelect.addEventListener("change", function() {
        const marcaEscolhida = this.value;

        // Limpar modelos anteriores
        modeloSelect.innerHTML = '<option value="">Selecione um Modelo</option>';

        if (marcaEscolhida && modelosCarrosBR[marcaEscolhida]) {
            modelosCarrosBR[marcaEscolhida].forEach(modelo => {
                const option = document.createElement("option");
                option.value = modelo;
                option.textContent = modelo;
                modeloSelect.appendChild(option);
            });
        }
    });
});
