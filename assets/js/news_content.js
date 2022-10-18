$(document).ready(function () {
	let imageHtml = $(".image_detail");
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
});
