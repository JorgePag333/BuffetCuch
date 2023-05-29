var mycheck = document.querySelectorAll('.mycheck');
var formulario= document.querySelector('.FormCatElec');
var Mychequet=[];
let displayPrecio= document.querySelector('#precio');

formulario.addEventListener(
    'submit',(evento)=>{
    localStorage.clear("adicionales")


    
    mycheck.forEach(element => {
        
        if(element.checked){
            Mychequet.push(element.id)
            localStorage.setItem("adicionales",Mychequet)
        }s
    });
    }
)
let  suma=0;
let ChecM=()=>{
    mycheck.forEach((cadaC) => {
   
        
            cadaC.addEventListener("click", (e) => {
                let parce=parseInt(e.target.id)
                if(e.target.checked){
                    suma+=parce
                    // stopPropagation()
                    //console.log(suma);
                }
            
                else{
                    suma=suma-parce
                    // stopPropagation()
                }                
                console.log(suma);
                displayPrecio.innerHTML=suma
            });
           
        })
        


}
ChecM();
