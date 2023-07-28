                            function toast() {
                                
                                const toast = document.querySelector(".toast"),
                                closeIcon = document.querySelector(".close"),
                                    progress = document.querySelector(".progress");
    
                                let timer1, timer2;
    
                                
                                    toast.classList.add("ver");
                                    progress.classList.add("ver");
    
                                    timer1 = setTimeout(() => {
                                        toast.classList.remove("ver");
                                    }, 5000); //1s = 1000 milliseconds
    
                                    timer2 = setTimeout(() => {
                                        progress.classList.remove("ver");
                                    }, 5300);
    
                                closeIcon.addEventListener("click", () => {
                                    toast.classList.remove("ver");
    
                                    setTimeout(() => {
                                        progress.classList.remove("ver");
                                    }, 300);
    
                                    clearTimeout(timer1);
                                    clearTimeout(timer2);
                                });
                            }