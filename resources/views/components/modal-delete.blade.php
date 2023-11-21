 <!-- Modal -->
 <div class="modal fade" id="modalDelete" data-backdrop="static" data-keyboard="false" tabindex="-1">
     <div class="modal-dialog">
         <form class="modal-content" method="post" action="#">
             @method('delete')
             <div class="modal-header">
                 <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus</h1>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">
                 Apakah data yakin untuk dihapus ?
             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-warning" data-dismiss="modal">Tidak</button>
                 <button type="submit" class="btn btn-danger">Hapus</button>
             </div>
         </form>
     </div>
 </div>
 @push('js')
     <script>
         $(function() {
             $('#modalDelete').on('show.bs.modal', function(event) {
                 var button = $(event.relatedTarget)
                 var recipient = button.data('link')
                 var modal = $(this)
                 modal.find('.modal-content').attr('action', recipient)
             })
         });
     </script>
 @endpush
