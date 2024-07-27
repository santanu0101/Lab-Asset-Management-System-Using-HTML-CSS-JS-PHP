function addClick() {
    document.querySelector('.form_section').style.display = 'flex';
}
document.getElementById('close').addEventListener('click', function() {
    document.querySelector('.form_section').style.display = 'none';
});


document.addEventListener('DOMContentLoaded',()=>{
    const rows = document.querySelectorAll('tr[data-href]')
    // console.log(rows)
    rows.forEach(row => {
        row.addEventListener('click',()=>{
            window.location.href=row.dataset.href
        })
        
    });
})