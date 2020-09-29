<div style="width: 100%; max-width: 1000px; margin: 20px auto; background: blue; display: grid; grid-template-columns: 1fr; grid-row-gap: 20px;">
    <div style="background: #CCCCCC; min-height: 640px; padding: 20px">
        <h2>Conteudo blue</h2>

        <?php if (is_active_sidebar('conteudo-blue')) :
            dynamic_sidebar('conteudo-blue');
        endif; ?>
    </div>
</div>
