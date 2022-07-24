$(".delete-row").click(function(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Silmek istediğinden emin misin?',
        text: "Sildiginiz veriyi geri alamazsınız!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Silme',
        cancelButtonText: 'Evet, Sil!'
    }).then((result) => {
        if (!result.isConfirmed) {
            // location.href="www.google.com";
            let fullHref = window.location.href.split("?")[0];
            const href = $(this).attr("target-href");
            location.href = fullHref + "?" + href;
        }
    });
});


$(".clear-btn").click(function(e) {
    e.preventDefault();
    $(this).prev().val("");
});

$(".change-cols").click(function (e) { 
  e.preventDefault();
  $(".barier").toggleClass("col-md-4").toggleClass("col-md-8");
});