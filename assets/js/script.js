document.addEventListener("DOMContentLoaded", function () {
    function user() {
        const open = document.getElementById("user");
        const session = document.querySelector(".block_login");

        if (open && session) {
            open.addEventListener("click", () => {
                session.classList.toggle("active");
            });
        } 
    }

    function btn_carrito(){
        const btn_carro = document.getElementById("carrito");
        const btn_cross = document.getElementById("btn_cross");
        const section_carro = document.querySelector(".carrito");
        
        btn_carro.addEventListener("click", () =>{
            section_carro.classList.add("active");
        });

        btn_cross.addEventListener("click", () =>{
            section_carro.classList.remove("active");
        });
    }

    function talle(){
        const talle = document.getElementById("talle");
        const cruse = document.getElementById("cruse");
        const table = document.querySelector(".tableTalle");

        talle.addEventListener("click", () =>{
            table.classList.add("active");
        });

        cruse.addEventListener("click", () =>{
            table.classList.remove("active");
        });
    }

    

    // Llama a la función user
    user();
    btn_carrito();
    talle();
});
