    let input = document.querySelector("input")
            let p = document.querySelector("p")
            function addEquation() {
                MathJax.typesetPromise().then(() => {
                    p.innerHTML = `\\[ ${input.value} \\]` + p.innerHTML;
                    MathJax.typesetPromise();
                })
            }

            function mostrarR(boton){
                if(boton == 1){
                    document.getElementById('Res1').style.display = 'block';
                }

                if(boton == 2){
                    document.getElementById('Res2').style.display = 'block';
                }

                if(boton == 3){
                    document.getElementById('Res3').style.display = 'block';
                }

                if(boton == 4){
                    document.getElementById('Res4').style.display = 'block';
                }

                if(boton == 5){
                    document.getElementById('Res5').style.display = 'block';
                }

                if(boton == 6){
                    document.getElementById('Res6').style.display = 'block';
                }

                if(boton == 7){
                    document.getElementById('Res7').style.display = 'block';
                }
            }

            function exponente(boton){

                if(boton == 1){
                    document.getElementById('ejercicio1').value += "^";
                }

                if(boton == 2){
                    document.getElementById('ejercicio2').value += "^";
                }

                if(boton == 3){
                    document.getElementById('ejercicio3').value += "^";
                }

                if(boton == 4){
                    document.getElementById('ejercicio4').value += "^";
                }

                if(boton == 5){
                    document.getElementById('ejercicio5').value += "^";
                }

                if(boton == 6){
                    document.getElementById('ejercicio6').value += "^";
                }

                if(boton == 7){
                    document.getElementById('ejercicio7').value += "^";
                }
            }

            function fraccion(boton){

                if(boton == 1){
                    document.getElementById('ejercicio1').value += "/";
                }

                if(boton == 2){
                    document.getElementById('ejercicio2').value += "/";
                }

                if(boton == 3){
                    document.getElementById('ejercicio3').value += "/";
                }

                if(boton == 4){
                    document.getElementById('ejercicio4').value += "/";
                }

                if(boton == 5){
                    document.getElementById('ejercicio5').value += "/";
                }

                if(boton == 6){
                    document.getElementById('ejercicio6').value += "/";
                }

                if(boton == 7){
                    document.getElementById('ejercicio7').value += "/";
                }
            }

            function raiz(boton){

                if(boton == 1){
                    document.getElementById('ejercicio1').value += "√";
                }

                if(boton == 2){
                    document.getElementById('ejercicio2').value += "√";
                }

                if(boton == 3){
                    document.getElementById('ejercicio3').value += "√";
                }

                if(boton == 4){
                    document.getElementById('ejercicio4').value += "√";
                }

                if(boton == 5){
                    document.getElementById('ejercicio5').value += "√";
                }

                if(boton == 6){
                    document.getElementById('ejercicio6').value += "√";
                }

                if(boton == 7){
                    document.getElementById('ejercicio7').value += "√";
                }
            }