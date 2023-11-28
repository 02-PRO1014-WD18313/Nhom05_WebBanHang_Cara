// 1. what is API
// 2. How do I call API
// 3. Explain code
const host = "https://provinces.open-api.vn/api/";
var callAPI = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data, "province");
        });
}
callAPI('https://provinces.open-api.vn/api/?depth=1');
var callApiDistrict = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.districts, "district");
        });
}
var callApiWard = (api) => {
    return axios.get(api)
        .then((response) => {
            renderData(response.data.wards, "ward");
        });
}

var renderData = (array, select) => {
    let row = ' <option disable value="">Chọn</option>';
    array.forEach(element => {
        row += `<option value="${element.code}">${element.name}</option>`
    });
    document.querySelector("#" + select).innerHTML = row
}

$("#province").change(() => {
    callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
    printResult();
});
$("#district").change(() => {
    callApiWard(host + "d/" + $("#district").val() + "?depth=2");
    printResult();
});
$("#ward").change(() => {
    printResult();
})

// var printResult = () => {
//     if ($("#district").val() != "" && $("#province").val() != "" &&
//         $("#ward").val() != "") {
//         let result = $("#province option:selected").text() +
//             " | " + $("#district option:selected").text() + " | " +
//             $("#ward option:selected").text();
//         $("#result").text(result)
//     }

// }
var printResult = () => {
    if ($("#district").val() != "" && $("#province").val() != "" &&
        $("#ward").val() != "") {
        let result = $("#province option:selected").text();
        let result1 = $("#district option:selected").text();
        let result2 = $("#ward option:selected").text();

        input.value = $("#province option:selected").text();
        input1.value = $("#district option:selected").text();
        input2.value = $("#ward option:selected").text();

        $("#result").text(result)
        $("#result1").text(result1)
        $("#result2").text(result2)

        $("#input").text(input.value)
        $("#input1").text(input.value)
        $("#input2").text(input.value)
    }

}