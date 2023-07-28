const XHR = new XMLHttpRequest();
                var datos = document.getElementById('form');
                var url = document.getElementById('url').value;
                var resultado = document.getElementById('resultado');
                datos.addEventListener('submit', (ev) => {
                    const form = new FormData(datos);
                    XHR.open('POST', url);
                    XHR.onload = () => {
                        if (XHR.status === 200) {
                            var data = XHR.responseText;
                            resultado.innerHTML = data;
                            toast();
                        } else {
                            console.log("error en la peticion: " + XHR.status)
                        }
                    }
                    XHR.send(form);
                    ev.preventDefault();
                });