$(document).ready(function () {
	let imageHtml = $(".image_detail");
		imageHtml.each(function () {
			$(this).on("click", function (i) {
				// console.log($(this).attr('src'));
				Swal.fire({
					imageUrl: $(this).attr("src"),
					imageWidth: 800,
					imageHeight: 400,
					imageAlt: "Teacher image",
				});
			});
			// console.log($(this).attr("src"));
		});
	let option = "";
	$.ajax({
		method:"GET",
		url:'https://admin.sdntemas1.sch.id/teacher/jabatan',
		dataType:"json",
		headers: {
			"Access-Control-Allow-Origin":"*"
		},
	}).done(function(res){
		console.log(res);
		res.forEach(i => {
			console.log(i.teacher_name);
			option += `<option>${i.teacher_name}</option>`
		});
		$(".jabatan").html(option);
	})
});
