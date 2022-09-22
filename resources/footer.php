<script>
function downloadPDF(){
    document.getElementById('button').style.visibility = 'hidden';
    window.print();
    document.getElementById('button').style.visibility = 'visible';

//     let table = document.getElementById('whatToPrint')
 
//     let options = {
//         margin:1,
//         filename:'test.pdf',
//         image:{
//             type:'png',
//             quality:2
//         },
//         html2canvas:{
//             scale:1,
            
//         },
//         jsPDF:{
//             unit:'in',
//             // format:'tabloid',
//             orientation:'portrait',
//             format: [8.3, 11.7],
//             // format: [1903, 1217],
//         }
//     }
// //     var body = document.body,
// //     html = document.documentElement;

// // var height = Math.max( body.scrollHeight, body.offsetHeight, 
// //                        html.clientHeight, html.scrollHeight, html.offsetHeight );
// //                        var Width = Math.max( body.scrollWidth, body.offsetWidth, 
// //                        html.clientWidth, html.scrollWidth, html.offsetWidth );
// //                        alert(height)
// //                        alert(Width)


//     html2pdf().from(table).set(options).save()
}
</script>

</html>