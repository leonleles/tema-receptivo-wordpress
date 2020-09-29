<div style="width: 100%; max-width: 1000px; margin: 20px auto; background: green; display: grid; grid-template-columns: 260px auto; grid-column-gap: 20px">
    <div style="background: #CCCCCC; height: 600px; padding: 20px">
        <h3>Sidebar</h3>
        <ul style="display: flex; flex-direction: column">
            <li>Inicio</li>
            <li>Cidade</li>
            <li>Historia</li>
            <li>Transparencia</li>
        </ul>
    </div>
    <div style="background: #CCCCCC; min-height: 640px; padding: 20px">
        <h2>Conteudo</h2>

        <?php if (is_active_sidebar('conteudo-green')) :
            dynamic_sidebar('conteudo-green');
        endif; ?>
    </div>
</div>
