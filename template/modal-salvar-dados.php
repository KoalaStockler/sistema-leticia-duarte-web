<div class="ui basic modal" id="modalSalvar">
  <div class="ui icon header">
    <i class="save icon"></i>
    Salvar Cadastros
  </div>
  <div class="content" style="text-align: center; font-size: 1.4rem;">
    <p>Você está prestes a salvar todos os dados do cadastro.<br>Tem certeza de que deseja continuar?</p>
  </div>
  <div class="actions">
    <div class="ui red basic cancel inverted button">
      <i class="remove icon"></i>
      Cancelar
    </div>
    <div class="ui green ok inverted button" id="btnConfirmarSalvar">
      <i class="checkmark icon"></i>
      Salvar
    </div>
  </div>

  <!-- Loader oculto inicialmente -->
  <div class="ui active inverted dimmer" id="loaderSalvar" style="display:none;">
    <div class="ui text loader">Salvando dados...</div>
  </div>
</div>
