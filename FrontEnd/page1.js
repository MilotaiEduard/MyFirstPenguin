    
    const ceas = document.getElementById("ceas");

    update();
    
    function update(){
        let date =new Date();
        ceas.innerHTML = date;
    }
