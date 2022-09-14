const button = document.getElementById('button')
const form = document.getElementById('form')
button.addEventListener('click', (e) => {
    

    nome = document.getElementById('nome')
    email = document.getElementById('email')
    senha = document.getElementById('senha')
    pin = document.getElementById('pin')
    erro = false

    

   
   
    
    if (nome.value=="")
    {
        
        alert ("\nPor favor digite o nome.");
        erro = true
        
         
    }
    if (email.value=="" || email.value.indexOf('@', 0) == -1 || email.value.indexOf('.', 0) == -1)
    {
        
        alert ("\nE-mail inválido.");
        erro = true
    }
    
    if (senha.value.length<5 || senha.value.length>15)
    {   
        
        alert ("\nA senha deve conter entre 5 e 15 caracteres.");
        erro = true
    }
    if (senha.value.indexOf(' ', 0) != -1)
    {
        
        alert ("\nA senha não pode conter espa�os em branco.");
        erro = true
    }
    if (pin.value.length<4 || pin.value.length>6)
    {
      
        alert ("\nO pin deve conter entre 4 e 6 caracteres.");
        erro = true
    }
    if (pin.value.indexOf(' ', 0) != -1)
    {
        
        alert ("\nO pin não pode conter espa�os em branco.");
        erro = true
    }
    
    if(!erro){
        form.submit()
        
    }
    
    
    
    


})

