<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PlanAccountFactory extends Factory
{
    protected static $index = 0;

    protected array $names = [
        '01 - Основные средства (ОС)',
        '02 - Амортизация ОС',
        '03 - Доходные вложения в материальные ценности',
        '04 - Нематериальные активы (НМА)',
        '05 - Амортизация НМА',
        '07 - Оборудование к установке',
        '08 - Вложения во внеоборотные активы',
        '09 - Отложенные налоговые активы',
        '10 - Материалы',
        '11 - Животные на выращивании и откорме',
        '14 - Резервы под снижение стоимости материальных ценностей',
        '15 - Заготовление и приобретение материальных ценностей',
        '16 - Отклонение в стоимости материальных ценностей',
        '19 - НДС по приобретенным ценностям',
        '20 - Основное производство',
        '21 - Полуфабрикаты собственного производства',
        '23 - Вспомогательные производства',
        '25 - Общепроизводственные расходы',
        '26 - Общехозяйственные расходы',
        '28 - Брак в производстве',
        '29 - Обслуживающие производства и хозяйства',
        '40 - Выпуск продукции (работ, услуг)',
        '41 - Товары',
        '42 - Торговая наценка',
        '43 - Готовая продукция',
        '44 - Расходы на продажу',
        '45 - Товары отгруженные',
        '46 - Выполненные этапы по незавершенным работам',
        '50 - Касса',
        '51 - Расчетные счета',
        '52 - Валютные счета',
        '55 - Специальные счета в банках',
        '57 - Переводы в пути',
        '58 - Финансовые вложения',
        '59 - Резервы под обесценение финансовых вложений',
        '60 - Расчеты с поставщиками и подрядчиками',
        '62 - Расчеты с покупателями и заказчиками',
        '63 - Резервы по сомнительным долгам',
        '66 - Расчеты по краткосрочным кредитам и займам',
        '67 - Расчеты по долгосрочным кредитам и займам',
        '68 - Расчеты по налогам и сборам',
        '69 - Расчеты по социальному страхованию и обеспечению',
        '70 - Расчеты с персоналом по оплате труда',
        '71 - Расчеты с подотчетными лицами',
        '73 - Расчеты с персоналом по прочим операциям',
        '75 - Расчеты с учредителями',
        '76 - Расчеты с разными дебиторами и кредиторами',
        '77 - Расчеты с персоналом по прочим операциям',
        '79 - Внутрихозяйственные расчеты',
        '80 - Уставный капитал',
        '81 - Собственные акции (доли)',
        '82 - Резервный капитал',
        '83 - Добавочный капитал',
        '84 - Нераспределенная прибыль (непокрытый убыток)',
        '86 - Целевое финансирование',
        '90 - Продажи',
        '91 - Прочие доходы и расходы',
        '94 - Недостачи и потери от порчи ценностей',
        '96 - Резервы предстоящих расходов',
        '97 - Расходы будущих периодов',
        '98 - Доходы будущих периодов',
        '99 - Прибыли и убытки',
        '001 - Арендованные основные средства',
        '002 - Товарно-материальные ценности, принятые на ответственное хранение',
        '003 - Материалы, принятые в переработку',
        '004 - Товары, принятые на комиссию',
        '005 - Оборудование, принятое для монтажа',
        '006 - Бланки строгой отчетности',
        '007 - Списанная в убыток задолженность неплатежеспособных дебиторов',
        '008 - Обеспечения обязательств и платежей полученные',
        '009 - Обеспечения обязательств и платежей выданные',
        '010 - Износ ОС',
        '011 - ОС, сданные в аренду',
    ];
    public function definition() : array
    {
        $name = $this->names[static::$index % count($this->names)];
        static::$index++;

        return [
            'name' => $name,
        ];
    }
}
