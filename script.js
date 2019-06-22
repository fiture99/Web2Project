
function trigger(){
    document.querySelector('#profile_img').click();
}
function displayImage(e){
    if(e.files[0]){
        let reader = new FileReader();
        reader.onload=function(e){

        document.querySelector('#img').setAttribute('src', e.target.result);
        }
        reader.readAsDataURL(e.files[0]);
        document.querySelector('#submit-profile').style.display="block";
    }
    
}



document.querySelector('form[name=add-driver]').addEventListener('submit', (event) => {
    let firstName=document.querySelector('#full_name');
    let fullname=document.querySelector('#error-fullname');
    if(firstName.textContent==''){
        firstName.style.border='1px solid rgb(138, 16, 16)';
        fullname.textContent="inser your fulllname";
        event.preventDefault();
        // break;
    }else{
        console.log('not working');
        
    }
    
    });

    document.querySelector('form[name=add-driver]').addEventListener('submit', (event) => {
        let firstName=document.querySelector('#full_name');
        let fullname=document.querySelector('#error-fullname');
        if(firstName.textContent==''){
            firstName.style.border='1px solid rgb(138, 16, 16)';
            fullname.textContent="inser your fulllname";
            event.preventDefault();
            // break;
        }else{
            console.log('not working');
            
        }
        
        });

        