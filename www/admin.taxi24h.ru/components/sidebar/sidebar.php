<div class="sidebar">
    <ul class="sidebar__menu">
        <li class="sidebar__item"><a href="<? echo $routs['cities'] ?>" class="sidebar__link sidebar_linkTop">Города</a></li>
        <li class="sidebar__item"><a href="<? echo $routs['addCity'] ?>" class="sidebar__link">Добавить город</a></li>
        <div class="sidebar__divider"></div>
        <li class="sidebar__item"><a href="" class="sidebar__link sidebar_linkTop">Тексты</a></li>
        <li class="sidebar__item"><a href="<? echo $routs['text-fields'] ?>" class="sidebar__link">Текстовые поля</a></li>
        <?
        $text_pages = getAllTextTypes();
        foreach ($text_pages as $text_page) {
        ?>
            <li class="sidebar__item">
                <a href="<? echo $routs['text']."?text-type=".$text_page['id_text_type'] ?>" class="sidebar__link">
                    <?echo $text_page['text_type_name']?>
                </a>
            </li>
        <?
        }
        ?>


        <div class="sidebar__divider"></div>
        <li class="sidebar__item"><a href="<? echo $routs['defaults'] ?>" class="sidebar__link sidebar_linkTop">Константы</a></li>
        <div class="sidebar__divider"></div>
        <li class="sidebar__item"><a href="<? echo $routs['widgets'] ?>" class="sidebar__link sidebar_linkTop">Виджеты</a></li>
        <li class="sidebar__item"><a href="<? echo $routs['widget-types'] ?>" class="sidebar__link">Типы виджетов</a></li>
    </ul>
</div>