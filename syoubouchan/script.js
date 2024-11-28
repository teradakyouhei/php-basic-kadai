// 担当営業と点検表提出状況をランダムに設定する
document.addEventListener("DOMContentLoaded", function() {
    var salesPersons = ["野口", "宮崎", "寺田", "小野木", "町井"];
    var checkStatus = ["○", "✕"];
    
    var table = document.getElementById("propertyTable");
    var rows = table.getElementsByTagName("tr");
    
    // 各行の担当営業と点検表提出状況を設定
    for (var i = 1; i < rows.length; i++) {
        var salesCell = rows[i].getElementsByTagName("td")[3]; // 担当営業
        var checkCell = rows[i].getElementsByTagName("td")[5]; // 点検表提出済
        
        // 担当営業をランダムに設定
        var randomSalesPerson = salesPersons[Math.floor(Math.random() * salesPersons.length)];
        salesCell.textContent = randomSalesPerson;
        
        // 点検表提出状況をランダムに設定
        var randomCheckStatus = checkStatus[Math.floor(Math.random() * checkStatus.length)];
        checkCell.textContent = randomCheckStatus;
    }
});

// 各列を検索できるようにフィルタリング機能を実装
function filterTable(inputId, columnIndex) {
    var input = document.getElementById(inputId);
    var filter = input.value.toLowerCase();
    var table = document.getElementById("propertyTable");
    var rows = table.getElementsByTagName("tr");

    for (var i = 1; i < rows.length; i++) {
        var cells = rows[i].getElementsByTagName("td");
        if (cells[columnIndex]) {
            var cellText = cells[columnIndex].textContent || cells[columnIndex].innerText;
            if (cellText.toLowerCase().indexOf(filter) > -1) {
                rows[i].style.display = "";
            } else {
                rows[i].style.display = "none";
            }
        }
    }
}
