var sortType = $.fn.dataTable.absoluteOrder("Peer-Reviewed");

new DataTable("#tb_all", {
  info: true,
  paging: true,
  pageLength: 10,
  lengthChange: false,
  bFilter: true,
  order: [
    [5, "desc"],
    [2, "desc"],
    [0, "asc"],
  ],
  responsive: true,
  columnDefs: [{ responsivePriority: 1, targets: 5, type: sortType }],
});

new DataTable("#tb_none", {
  info: false,
  ordering: false,
  paging: false,
  bFilter: false,
});
