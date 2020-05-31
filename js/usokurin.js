
Swal.fire({
    title: 'Не смей.',
    text: "Вы правда думаете, что все так просто?",
    icon: 'error',
    showCancelButton: true,
    confirmButtonColor: 'rgb(255, 099, 058)',
    cancelButtonColor: 'rgb(0, 0, 0)',
    confirmButtonText: 'Назад.',
    cancelButtonText: 'Назад.'
  }).then((result) => {
    if (result.value) {
        document.location.href = "reHome.html";
    } else {
        document.location.href = "reHome.html";
    }
  })
