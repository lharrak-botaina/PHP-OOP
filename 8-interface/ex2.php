<?php
interface A{
    const B="Interface constant";
}
echo A::B;
echo '<br>';
class B implements A{
    const B='class constant';
}
echo B::B;