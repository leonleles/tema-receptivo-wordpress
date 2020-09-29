<div style="width: 100%; margin: 20px auto; background: darkviolet; display: grid; grid-template-columns: 1fr; grid-row-gap: 20px;">
    <div style="background: darkviolet; min-height: 640px; padding: 20px">
        <h2>Conteudo darkviolet</h2>

        <?php if (is_active_sidebar('conteudo-darkviolet')) :
            dynamic_sidebar('conteudo-darkviolet');
        endif; ?>
    </div>
</div>
