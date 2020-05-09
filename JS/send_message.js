
    messageInput = document.querySelector('#message')
    nicknameInput = document.querySelector('#nickname')
function send_message (url){

fetch(url,{method: 'POST'})

        
    .then(response => {
        response = nicknameInput.value +':'+ messageInput.value
        return JSON.stringify(response)
    }).then(data =>{
        console.log(data)
    })

}

