<?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion); ?>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php if (pagina_actual() == 1) : ?>

      <li class="page-item">
        <a class="page-link" href="#" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    <?php else : ?>
      <li class="page-item">
        <a class="page-link" href="index.php?p=<?php echo pagina_actual() - 1 ?>" aria-label="Previous">
          <span aria-hidden="true">&laquo;</span>
        </a>
      </li>
    <?php endif; ?>
    <?php for ($i = 1; $i <= $numero_paginas; $i++) : ?>
      <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
    <?php endfor; ?>
    <?php if (pagina_actual() == $numero_paginas) : ?>

      <li class="page-item">
        <a class="page-link" href="#" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    <?php else : ?>
      <li class="page-item">
        <a class="page-link" href="index.php?p=<?php echo pagina_actual() + 1 ?>" aria-label="Next">
          <span aria-hidden="true">&raquo;</span>
        </a>
      </li>
    <?php endif; ?>
  </ul>
</nav>