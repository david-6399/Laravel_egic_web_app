$("#search-input").keyup(function () {
    var query = $(this).val();

    $.ajax({
        url: "/search",
        method: "GET",
        data: { query: query },
        success: function (response) {
            displaySearchResults(response);
        },
        error: function (xhr) {
            console.error(xhr.responseText);
        },
    });
});

function displaySearchResults(results) {
    var searchResultsContainer = $("#search-results");
    searchResultsContainer.empty(); // Clear previous search results

    // Iterate over the results and append them to the container
    $.each(results, function (index, result) {
        // Modify this to display the result as desired
        var resultHtml = "<div>" + result.name + "</div>";
        searchResultsContainer.append(resultHtml);
    });
}
