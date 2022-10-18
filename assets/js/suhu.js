setInterval(() => {
	$.ajax({
		url: "https://admin.sdntemas1.sch.id/sensor",
		dataType: "json",
		method: "GET",
	}).done(function (res) {
		// console.log(res[0].suhu);
		$("#suhu").html(res[0].suhu + " ° C");
		$("#kelembaban").html(res[0].kelembaban + " %");
		console.log('jalan');
	});
}, 1000);
