
document.querySelectorAll('.card').forEach(card=>{
    card.addEventListener('click', function(){

        document.querySelectorAll('.card').forEach(c=>{
            if(c !== this){
                c.classList.remove('active');
            }
        });

        this.classList.toggle('active');
    });
});
