
   
function refresh_message (url){
    div_message = document.querySelector('#message_div')
    fetch(url,{method: 'POST'})

        .then(response => {
            return response.json()
        })
        .then(data =>{ 
            if(document.querySelector('#message_div div') !== null){

                document.querySelector('#message_div div').remove('div')
                //console.log('deleted')          
            }
            if(document.querySelector('#message_div div') == null){

                div_message.appendChild(document.createElement('div'))
                //console.log('created')
                var maDiv = document.createElement('div')
                data.forEach(message => {
                    maDiv.innerHTML += '<h5>' + message.nickname +':'+'</h5>'+' <br>'
                                        +'<p class = "ml-5">'+ message.message 
                                        +' <br>' + '<span>' + message.created_at + '</span>' 
                                        + '<hr>'
                    document.querySelector('#message_div div').appendChild(maDiv)
                })
            }

        })

    }
    setInterval(() => {
        refresh_message ('../Partials/message_refresh.php')
    }, 1000);

    
    
    
    


function refreshUserList (url){
    divUsersList = document.querySelector('#usersList')
    fetch(url,{method: 'POST'})

        .then(response => {
            return response.json()
        })
        .then(data =>{ 
            if(document.querySelector('#usersList div') !== null){

                document.querySelector('#usersList div').remove('div')
                console.log('deleted')          
            }
            if(document.querySelector('#usersList div') == null){

                document.querySelector('#usersList div').appendChild(document.createElement('div'))
                console.log('created')
                var newDiv = document.createElement('div')
                data.forEach(users => {
                    newDiv.innerHTML += '<h5>'+ users.nickname +'</h5>'
                                   
                    document.querySelector('#usersList div').appendChild(maDiv)
                })
            }

        })

    }
    setInterval(() => {
        refreshUserList ('../Partials/users_list.php')
    }, 1000);