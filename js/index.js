document.addEventListener('DOMContentLoaded', function () {
  const dialog = document.getElementById('dialog');
  const closeDialogBtn = document.getElementById('close-dialog-btn');

  const memberData = {
    ralphmaron: {
      name: 'Ralph Maron Eda',
      description:
        'Ralph Maron Eda is a dedicated member with a passion for coding.',
      img: 'img/ralphmaron.jpg',
    },
    jack: {
      name: 'Jack Cabiggayan',
      description:
        'Jack Cabiggayan specializes in web design and has a keen eye for aesthetics.',
      img: 'img/jack.jpg',
    },
    triesha: {
      name: 'Triesha Olunan',
      description:
        'Triesha Olunan is an expert in web development with a focus on backend technologies.',
      img: 'img/triesha.jpg',
    },
    jezlyn: {
      name: 'Jezlyn Cabbab',
      description:
        'Jezlyn Cabbab is a skilled web architect with experience in large-scale projects.',
      img: 'img/jezlyn.jpg',
    },
  };

  function showDialog(id) {
    const member = memberData[id];

    if (member) {
      document.getElementById('dialog-name').textContent = member.name;
      document.getElementById('dialog-description').textContent =
        member.description;
      document.getElementById('dialog-image').setAttribute('src', member.img);

      dialog.style.display = 'flex';
    }
  }

  function closeDialog() {
    dialog.style.display = 'none';
  }

  document.querySelectorAll('ul li').forEach((item) => {
    item.addEventListener('click', function () {
      showDialog(this.id);
    });
  });

  closeDialogBtn.addEventListener('click', function () {
    dialog.style.display = 'none';
  });

  window.addEventListener('click', function (event) {
    if (event.target === dialog) {
      dialog.style.display = 'none';
    }
  });

  // keypress event handler [jquery things]
  document.addEventListener('keydown', function (e) {
    switch (e.key) {
      case 'r':
        showDialog('ralphmaron');
        break;
      case 'a':
        showDialog('jack');
        break;
      case 't':
        showDialog('triesha');
        break;
      case 'e':
        showDialog('jezlyn');
        break;
      case 'q':
      case 'Escape':
        closeDialog();
        break;
    }
  });
});
