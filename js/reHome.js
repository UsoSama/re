function rehomeExit() {
    Swal.fire({
    title: 'Вы уверены?',
    icon: 'warning',
    showCancelButton: true,
    cancelButtonText: 'Остаться',
    confirmButtonColor: 'rgb(255, 099, 058)',
    cancelButtonColor: 'rgb(0, 0, 0)',
    confirmButtonText: 'Перейти на главную страницу'
    }).then((result) => {
      if (result.value) {
        document.location.href = "index.html";
      } else {
        setTimeout('rehomeShiro.src = "img/reHome/rehomeShiroGlitch.png"', 0);
        setTimeout('rehomeShiro.src = "img/reHome/rehomeShiro.png"', 1000);
      }
    })
    rehomeShiro.src = "/img/rehome/glitch_2020-5-5_20-19-52.gif" 
}

  function rehomeAuthor() {
    Swal.fire({
      title: 'Re:born —',
      text: 'literary universe',
      footer: '©Bakeneko-sama',
      confirmButtonText: 'Перейти на страницу автора',
      confirmButtonColor: 'rgb(255, 099, 058)',
      imageUrl: '/img/rehome/rehomeLogo.png',
      imageWidth: 400,
      imageHeight: 400,
      imageAlt: 'Custom image',
    }).then((result) => {
      if (result.value) {
        document.location.href = "bakeneko.html";
      }
    })
}

  function rehomeUniverse1() {
    Swal.fire({
      title: 'Ephemeral soul',
      text: 'В тот день так ярко светило солнце. Мама напевала какую-то незамысловатую мелодию, в то время как папазтарательно зашивал порваную штанину - сам виноват, все предупреждали, что на той тропинке очень много колючек. Еще совсем маленькая Широ весело играла с плюшевым мишкой',
      confirmButtonColor: 'rgb(255, 099, 058)',
      confirmButtonText: 'Подробнее...',
    }).then((result) => {
      if (result.value) {
        document.location.href = "reEphemeral_soul.html";
      }
    })
}

  function rehomeUniverse2() {
    Swal.fire({
      title: 'Rebirth',
      text: 'Прогуляться было определенно лучшей идеей, что предлагал Дэн за последнее время. И пускай они идут забирать Эмилили с кружков, факт один - они идут вместе. Широ бормочет что-то грозное себе под нос, когда Лайр случайно задевает ее рукой. Из проклятий в адрес друга ее выводит звонкий голос Эмилил',
      confirmButtonColor: 'rgb(255, 099, 058)',
      confirmButtonText: 'Подробнее...',
    }).then((result) => {
      if (result.value) {
        document.location.href = "reRebirth.html";
      }
    })
}