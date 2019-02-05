//chat
$(function () {
	$(".chat").niceScroll();

	var chatmessages = [{
			username: 'bot',
			name: 'Sergio R',
			avatar: 'https://bootdey.com/img/Content/avatar/avatar2.png',
			text: 'Hola!',
			ago: '5 min ago'

		},
		{
			username: 'example',
			name: 'Lorena M',
			avatar: 'https://bootdey.com/img/Content/avatar/avatar1.png',
			text: '¿Que tal?',
			ago: '2 min ago'

		},
		{
			username: 'example',
			name: 'Lorena M',
			avatar: 'https://bootdey.com/img/Content/avatar/avatar1.png',
			text: '¿Que tal?',
			ago: '2 min ago'

		},
		{
			username: 'example',
			name: 'Lorena M',
			avatar: 'https://bootdey.com/img/Content/avatar/avatar1.png',
			text: '¿Que tal?',
			ago: '2 min ago'

        }, 
        {
			username: 'example',
			name: 'Lorena M',
			avatar: 'https://bootdey.com/img/Content/avatar/avatar1.png',
			text: '¿Que tal?',
			ago: '2 min ago'

		}
	];

	let htmldiv = ``;
	jQuery.each(chatmessages, function (i, item) {
		console.log(item);
		let position = item.username == 'bot' ? 'left' : 'right';
		let ago = item.ago;
		htmldiv += `<div class="answer ${position}">
                <div class="avatar">
                  <img src="${item.avatar}" alt="${item.name}">
                  <div class="status offline"></div>
                </div>
                <div class="name">${item.name}</div>
                <div class="text">
                  ${item.text}
                </div>
                <div class="time">${ago}</div>
              </div>`;
	});

	console.log(htmldiv);
	$("div#chat-messages").html(htmldiv);
	$(".chat").niceScroll();
})
