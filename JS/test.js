/* METHODE XMLHTTPREQUEST
    var httpRequest = new XMLHttpRequest()

        //CORS = appel url externe ajax 
        //progression de l'evenement == httpRequest.onreadystatechange
        //verification appel url if httpRequest.status === 200){}else {alert('not found')}
        var message_box = document.querySelector('#message_div')
        var submit_form = document.querySelector('#form_1')

        httpRequest.onreadystatechange = function () {

            console.log (this.readyState)

            if (httpRequest.readyState == 4){
                if (httpRequest.status == 200){
                    console.log('requete réussi')
                    message = this.responseText
                    console.log (message)
                    message_box.innerHTML = message

                }else {
                    console.log('code error ')
                }
            }
        }
        httpRequest.open('POST','../Partials/message.php',true)
        httpRequest.send()
*/
