$(document).ready(function () {
	let icon = $(".extra_icon");
	icon.each(function () {
		$(this).on("click", function (i) {
			// console.log($(this).attr('src'));
			Swal.fire({
				// html:'<i class="'+$('td i').attr('class')+'" style="font-size:4rem"></i>',
				html:
					'<i style="color:#00204a;font-size:4rem" class="' +
					$(this)[0]["childNodes"][0].attributes[0].nodeValue +
					'"></i>',
				// html:$(this),
			});
			// console.log();
		});
		// console.log($(this).attr("src"));
	});

	let imageHtml = $(".extra_image");
	console.log(
		imageHtml.each(function () {
			$(this).on("click", function (i) {
				// console.log($(this).attr('src'));
				Swal.fire({
					imageUrl: $(this).attr("src"),
					imageWidth: 800,
					imageHeight: 400,
					imageAlt: "Custom image",
				});
			});
			// console.log($(this).attr("src"));
		})
	);

	let realIcon = $("#realIcon");
	let iconTarget = $("#iconTarget");
	realIcon.on("keyup", function () {
		if (realIcon.val() == "") {
			iconTarget.removeClass();
		}
	});
	realIcon.on("keydown", function () {
		setTimeout(function () {
			iconTarget.removeClass();
			iconTarget.addClass(realIcon.val());
			// console.log("jalan");
		}, 4000);
	});
});
