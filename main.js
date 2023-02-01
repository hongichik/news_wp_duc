



document.addEventListener("DOMContentLoaded", () => { 
    document.querySelector(".sidebar_mobile_icon svg").addEventListener("click", menu_mobile);


    function menu_mobile() {
        sidebar_mobile_content = document.getElementById("sidebar_mobile_content");
        if (sidebar_mobile_content.style.display == 'block') {
            sidebar_mobile_content.style.display = "none";
        }
        else {
            sidebar_mobile_content.style.display = "block";
        }

    } 
    arrayMenu = document.querySelector('#sidebar_mobile_content').getElementsByTagName("li")
    for (let index = 0; index < arrayMenu.length; index++) {
        if (arrayMenu[index].querySelector('ul'))
        {
            arrayMenu[index].innerHTML = `
                <svg width="24" height="24" style="order: 2;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 6L12 18" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                    <path d="M18 12L6 12" stroke="#33363F" stroke-width="2" stroke-linecap="round"/>
                </svg>

            ` + arrayMenu[index].innerHTML;
            arrayMenu[index].querySelector('svg').addEventListener("click", function () {
                
                if (arrayMenu[index].querySelector('ul').style.display == 'block') {
                    arrayMenu[index].querySelector('ul').style.display = "none";
                }
                else {
                    arrayMenu[index].querySelector('ul').style.display = "block";
                }
            });
            console.log(arrayMenu[index]);
        }
        
        
    }

    function modifyText() {
        alert("oke");
    }
})
