const formatToDbDate = (date) => {
    if (!date) return '';
    const ano = date.getFullYear();
    const mes = (date.getMonth() + 1).toString().padStart(2, '0');
    const dia = date.getDate().toString().padStart(2, '0');
    return `${ano}-${mes}-${dia}`;
};


$(document).ready(function () {

    $('.ui.dropdown').dropdown();

    $('#txtTurma').on('change', function () {
        validarTurma();
    });

    $('#modal-salvar-dados .ok.button').on("click", function () {
        $('#formulario-aluno').submit();
    });

    $('.btn-deletar-aluno').on("click", function () {

        let raAluno = $(this).data('id');
        let nomeAluno = $(this).data('nome');

        $('#input-ra-excluir').val(raAluno);
        $('#ra-aluno-no-modal').text(raAluno);
        $('#nome-aluno-modal').text(nomeAluno);

        $('#modal-excluir').modal('show');
    });

    $('#modal-excluir').modal({});

    $('#btn-excluir-cadastro').on("click", function () {
        $('#form-excluir-cadastro').submit();
    });

    $('#btn-editar-aluno').on("click", function () {
        $('#modal-editar').modal('show');
    });

    $('#txtCep').mask('00000-000');
    $('#txtTelefone_1').mask('(00) 00000-0000');
    $('#txtTelefone_2').mask('(00) 00000-0000');
    $('#txtTelefoneTrabalho_1').mask('(00) 00000-0000');
    $('#txtCpfAutorizada').mask('000.000.000-00');
    $('#txtTelefoneAutorizada').mask('(00) 00000-0000');
    $('#txtTelefoneAutorizada2').mask('(00) 00000-0000');
    $('#txtTelefoneTrabalho_2').mask('(00) 00000-0000');
    $('#txtSalario_1').mask('000.000.000.000.000,00', {reverse: true, selectOnFocus: true});
    $('#txtSalario_2').mask('R$ 000.000.000.000.000,00', {reverse: true, selectOnFocus: true});
    $('#txtRendaExtra').mask('R$ 000.000.000.000.000,00', {reverse: true, selectOnFocus: true});
    $('#txtRendaExtra_2').mask('R$ 000.000.000.000.000,00', {reverse: true, selectOnFocus: true});
    $('#valor_bolsa_familia').mask('R$ 000.000.000.000.000,00', {reverse: true, selectOnFocus: true});
    


    $('#dataNascimentoCalendar').find('input[type="text"]').mask('00/00/0000');
    $('#dataNascimentoCalendar_1').find('input[type="text"]').mask('00/00/0000');
    $('#dataNascimentoCalendar_2').find('input[type="text"]').mask('00/00/0000');

    const dataDeHoje = new Date();

    const settingsPtBr = {
        months: [
            'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho',
            'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'
        ],
        monthsShort: [
            'Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun',
            'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'
        ],
        days: [
            'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'
        ],
        daysShort: [
            'Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'
        ],
        today: 'Hoje',
        now: 'Agora',
        am: 'AM',
        pm: 'PM',
        
        firstDayOfWeek: 0, 
        
        dateFormat: 'dd/mm/yyyy', 
    };

    $('#dataNascimentoCalendar').calendar({
        type: 'date', 
        maxDate: dataDeHoje, 
        text: settingsPtBr, 
        startMode: 'day',
        
        onChange: function(date, text) {
            if (date) {
                const dbFormattedDate = formatToDbDate(date);
                $('input[name="data_nascimento"]').val(dbFormattedDate); 
            } else {
                $('input[name="data_nascimento"]').val('');
            }
        },
        
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var dia = date.getDate().toString().padStart(2, '0');
                var mes = (date.getMonth() + 1).toString().padStart(2, '0');
                var ano = date.getFullYear();
                return dia + '/' + mes + '/' + ano;
            }
        },
        
    });

    $('#dataNascimentoCalendar_1').calendar({
        type: 'date', 
        maxDate: dataDeHoje, 
        text: settingsPtBr, 
        startMode: 'day',
        
        onChange: function(date, text) {
            if (date) {
                const dbFormattedDate = formatToDbDate(date);
                $('input[name="data_nascimento_1"]').val(dbFormattedDate); 
            } else {
                $('input[name="data_nascimento_1"]').val('');
            }
        },
        
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var dia = date.getDate().toString().padStart(2, '0');
                var mes = (date.getMonth() + 1).toString().padStart(2, '0');
                var ano = date.getFullYear();
                return dia + '/' + mes + '/' + ano;
            }
        },
        
    });

    $('#dataNascimentoCalendar_2').calendar({
        type: 'date', 
        maxDate: dataDeHoje, 
        text: settingsPtBr, 
        startMode: 'day',
        disableManual: false,
        
        // **Assumindo que você tem um <input type="hidden" name="data_nascimento_2"> no seu HTML.**
        onChange: function(date, text) {
            if (date) {
                const dbFormattedDate = formatToDbDate(date);
                $('input[name="data_nascimento_2"]').val(dbFormattedDate); 
            } else {
                $('input[name="data_nascimento_2"]').val('');
            }
        },
        
        formatter: {
            date: function (date, settings) {
                if (!date) return '';
                var dia = date.getDate().toString().padStart(2, '0');
                var mes = (date.getMonth() + 1).toString().padStart(2, '0');
                var ano = date.getFullYear();
                return dia + '/' + mes + '/' + ano;
            }
        },
    });


});

 $(document).on('keypress', function(event) {
        if (event.which === 13) {
            const focusedElement = $(document.activeElement);
            if (focusedElement.is('input') || focusedElement.is('select')) {
                event.preventDefault();
                return false; 
            }
        }
    });