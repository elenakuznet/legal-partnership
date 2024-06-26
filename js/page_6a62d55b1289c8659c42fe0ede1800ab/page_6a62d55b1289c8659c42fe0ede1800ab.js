
; /* Start:"a:4:{s:4:"full";s:86:"/components/bitrix/news.list/news-tiles/script.js?14984932741905";s:6:"source";s:71:"/components/bitrix/news.list/news-tiles/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
$(function() {

	var $news = $('.js-news');
	$news.each(function() {
		var $newsInner = $('.js-news-inner', this);
		var $newsLoadMore = $('.js-news-load-more', this);
		var $newsLoadMoreWrapper = $('.js-news-load-more-wrapper', this);

		var newsTemplate = $newsInner.data('news-template');
		var newsCount = $newsInner.data('news-count');

		// Ajax подгрузка новостей
		$newsLoadMore.on('click', function() {

			var $newsItems = $('.js-news-item', $newsInner);

			// Код раздела
			var sectionId = $newsInner.data('news-section-id');

			// ID команды
			var arTeamId = $newsInner.data('news-team-id').toString().split("|");

			// ID проектов
			var arProjectsId = $newsInner.data('news-projects-id').toString().split("|");

			// ID новостей на текущей странице
			var arNewsId = [];
			$newsItems.each(function() {
				arNewsId.push($(this).data('news-id'));
			});

			$.post("/ajax/", {
				act: "news-load-more",
				arNewsId: arNewsId,
				sectionId: sectionId,
				arTeamId: arTeamId,
				arProjectsId: arProjectsId,
				newsTemplate: newsTemplate,
				newsCount: newsCount
			}, function(response) {
				if(response.error) { // Произошла ошибка
					// Сюда можно дописать обработку ошибок
					return false;
				} else if(response.info == 'NO_MORE_ITEMS') { // Элементы закончились
					$newsLoadMoreWrapper.hide();
				} else { // Элементы есть и не произошло ошибки
					if($(response.data).filter('.js-news-item').length < newsCount) { // Если пришло меньше элементов чем запросили, не выводим кнопку загрузки
						$newsLoadMoreWrapper.hide();
					}
					$newsInner.html($newsInner.html() + response.data);
				}
			}, 'json');

			return false;

		});

	});
});
/* End */
;
; /* Start:"a:4:{s:4:"full";s:91:"/components/bitrix/form.result.new/events-form/script.js?149849327445";s:6:"source";s:78:"/components/bitrix/form.result.new/events-form/script.js";s:3:"min";s:0:"";s:3:"map";s:0:"";}"*/
// Скрипт в сборке. В script.js
/* End */
;; /* /components/bitrix/news.list/news-tiles/script.js?14984932741905*/
; /* /components/bitrix/form.result.new/events-form/script.js?149849327445*/
