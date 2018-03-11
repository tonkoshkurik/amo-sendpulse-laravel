Array
(
    [id] => 13131417
    [name] => ЖирКиллер
    [subdomain] => zhirkiller
    [currency] => UAH
    [timezone] => Europe/Kiev
    [language] => ru
    [notifications_base_url] => https://notifications.amocrm.ru
    [notifications_ws_url] => wss://notifications.amocrm.ru
    [notifications_ws_url_v2] => wss://ws.amocrm.ru/zhirkiller/v2/rtm?stand=v3
    [amojo_base_url] => https://amojo.amocrm.ru
    [amojo_rights] => Array
        (
            [can_direct] => 1
            [can_group_create] => 1
        )

    [current_user] => 1620216
    [version] => 3
    [date_pattern] => d.m.Y H:i
    [short_date_pattern] => Array
        (
            [date] => d.m.Y
            [time] => H:i
            [date_time] => d.m.Y H:i
        )

    [date_format] => d.m.Y
    [time_format] => H:i:s
    [country] => ua
    [unsorted_on] => N
    [mobile_feature_version] => 3
    [customers_enabled] => 
    [loss_reasons_enabled] => 
    [limits] => Array
        (
            [users_count] => 1
            [contacts_count] => 25000
            [active_deals_count] => 5000
        )

    [users] => Array
        (
            [0] => Array
                (
                    [id] => 1620216
                    [mail_admin] => A
                    [name] => ЖирКиллер
                    [last_name] => 
                    [login] => info@zhirkiller.info
                    [photo_url] => 
                    [phone_number] => 
                    [language] => ru
                    [active] => 1
                    [is_admin] => Y
                    [unsorted_access] => Y
                    [catalogs_access] => Y
                    [group_id] => 0
                    [rights_lead_add] => A
                    [rights_lead_view] => A
                    [rights_lead_edit] => A
                    [rights_lead_delete] => A
                    [rights_lead_export] => A
                    [rights_contact_add] => A
                    [rights_contact_view] => A
                    [rights_contact_edit] => A
                    [rights_contact_delete] => A
                    [rights_contact_export] => A
                    [rights_company_add] => A
                    [rights_company_view] => A
                    [rights_company_edit] => A
                    [rights_company_delete] => A
                    [rights_company_export] => A
                    [rights_task_edit] => A
                    [rights_task_delete] => A
                    [free_user] => 
                )

        )

    [groups] => Array
        (
        )

    [leads_statuses] => Array
        (
            [0] => Array
                (
                    [id] => 15205261
                    [name] => Новая заявка
                    [pipeline_id] => 636370
                    [sort] => 10
                    [color] => #98cbff
                    [editable] => Y
                )

            [1] => Array
                (
                    [id] => 15190978
                    [name] => Письмо 1
                    [pipeline_id] => 636370
                    [sort] => 20
                    [color] => #fffeb2
                    [editable] => Y
                )

            [2] => Array
                (
                    [id] => 15190981
                    [name] => Письмо 2
                    [pipeline_id] => 636370
                    [sort] => 30
                    [color] => #fffd7f
                    [editable] => Y
                )

            [3] => Array
                (
                    [id] => 15190984
                    [name] => Письмо 3
                    [pipeline_id] => 636370
                    [sort] => 40
                    [color] => #fff000
                    [editable] => Y
                )

            [4] => Array
                (
                    [id] => 15191104
                    [name] => Письмо 4
                    [pipeline_id] => 636370
                    [sort] => 50
                    [color] => #ffeab2
                    [editable] => Y
                )

            [5] => Array
                (
                    [id] => 15191107
                    [name] => СМС + Письмо (последний шанс)
                    [pipeline_id] => 636370
                    [sort] => 60
                    [color] => #ffdc7f
                    [editable] => Y
                )

            [6] => Array
                (
                    [id] => 15191113
                    [name] => Требует ответ от поддержки
                    [pipeline_id] => 636370
                    [sort] => 70
                    [color] => #87f2c0
                    [editable] => Y
                )

            [7] => Array
                (
                    [id] => 15192712
                    [name] => В процессе оплаты (перевод)
                    [pipeline_id] => 636370
                    [sort] => 80
                    [color] => #eb93ff
                    [editable] => Y
                )

            [8] => Array
                (
                    [id] => 15192136
                    [name] => Требует подтверждения оплаты
                    [pipeline_id] => 636370
                    [sort] => 90
                    [color] => #ebffb1
                    [editable] => Y
                )

            [9] => Array
                (
                    [id] => 15417058
                    [name] => Клоны
                    [pipeline_id] => 636370
                    [sort] => 100
                    [color] => #e6e8ea
                    [editable] => Y
                )

            [10] => Array
                (
                    [id] => 142
                    [name] => Успешно реализовано
                    [pipeline_id] => 636370
                    [sort] => 10000
                    [color] => #CCFF66
                    [editable] => N
                )

            [11] => Array
                (
                    [id] => 143
                    [name] => Закрыто и не реализовано
                    [pipeline_id] => 636370
                    [sort] => 11000
                    [color] => #D5D8DB
                    [editable] => N
                )

        )

    [custom_fields] => Array
        (
            [contacts] => Array
                (
                    [0] => Array
                        (
                            [id] => 1651994
                            [name] => Должность
                            [code] => POSITION
                            [multiple] => N
                            [type_id] => 1
                            [disabled] => 0
                            [sort] => 6
                        )

                    [1] => Array
                        (
                            [id] => 1651996
                            [name] => Телефон
                            [code] => PHONE
                            [multiple] => Y
                            [type_id] => 8
                            [disabled] => 0
                            [sort] => 4
                            [enums] => Array
                                (
                                    [3907964] => WORK
                                    [3907966] => WORKDD
                                    [3907968] => MOB
                                    [3907970] => FAX
                                    [3907972] => HOME
                                    [3907974] => OTHER
                                )

                        )

                    [2] => Array
                        (
                            [id] => 1651998
                            [name] => Email
                            [code] => EMAIL
                            [multiple] => Y
                            [type_id] => 8
                            [disabled] => 0
                            [sort] => 6
                            [enums] => Array
                                (
                                    [3907976] => WORK
                                    [3907978] => PRIV
                                    [3907980] => OTHER
                                )

                        )

                    [3] => Array
                        (
                            [id] => 1652002
                            [name] => Мгн. сообщения
                            [code] => IM
                            [multiple] => Y
                            [type_id] => 8
                            [disabled] => 0
                            [sort] => 5
                            [enums] => Array
                                (
                                    [3907982] => SKYPE
                                    [3907984] => ICQ
                                    [3907986] => JABBER
                                    [3907988] => GTALK
                                    [3907990] => MSN
                                    [3907992] => OTHER
                                )

                        )

                    [4] => Array
                        (
                            [id] => 1951033
                            [name] => MailChimp
                            [code] => 
                            [multiple] => N
                            [type_id] => 3
                            [disabled] => 1
                            [sort] => 504
                        )

                    [5] => Array
                        (
                            [id] => 1957801
                            [name] => Источник
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 507
                            [enums] => Array
                                (
                                    [4688163] => wellness.in.ua
                                    [4688165] => gorishki.zhirkiller
                                    [4689968] => fn.zhirkiller.com
                                )

                        )

                    [6] => Array
                        (
                            [id] => 1962118
                            [name] => zk Дивизион
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 508
                            [enums] => Array
                                (
                                    [4693902] => Easy Game
                                    [4693904] => Hard Game
                                )

                        )

                )

            [leads] => Array
                (
                    [0] => Array
                        (
                            [id] => 1956869
                            [name] => Метод оплаты
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 510
                            [enums] => Array
                                (
                                    [4545899] => Visa/MasterCard
                                    [4545901] => Приват24
                                    [4545907] => Наличными
                                )

                        )

                    [1] => Array
                        (
                            [id] => 1956871
                            [name] => Дата создания заявки
                            [code] => 
                            [multiple] => N
                            [type_id] => 6
                            [disabled] => 0
                            [sort] => 511
                        )

                    [2] => Array
                        (
                            [id] => 1956873
                            [name] => Статус оплаты
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 513
                            [enums] => Array
                                (
                                    [4545909] => Оплачена
                                    [4545911] => В процессе
                                    [4545913] => Просрочена
                                )

                        )

                    [3] => Array
                        (
                            [id] => 1956875
                            [name] => Ближайшее отделение Новой Почты
                            [code] => 
                            [multiple] => N
                            [type_id] => 1
                            [disabled] => 0
                            [sort] => 514
                        )

                    [4] => Array
                        (
                            [id] => 1957217
                            [name] => Пакет участия
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 512
                            [enums] => Array
                                (
                                    [4663583] => Мини
                                    [4663585] => Миди
                                    [4663587] => Макси
                                    [4663589] => Экстра
                                )

                        )

                    [5] => Array
                        (
                            [id] => 1957241
                            [name] => Цвет эспандера
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 515
                            [enums] => Array
                                (
                                    [4664071] => Синий
                                    [4664073] => Зелёный
                                )

                        )

                    [6] => Array
                        (
                            [id] => 1957837
                            [name] => Источник
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 516
                            [enums] => Array
                                (
                                    [4688173] => wellness.in.ua
                                    [4688175] => gorishki.zhirkiller
                                )

                        )

                    [7] => Array
                        (
                            [id] => 1959054
                            [name] => fn Источник заявки
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 509
                            [enums] => Array
                                (
                                    [4689952] => fn.zhirkiller.com
                                    [4689954] => new site
                                )

                        )

                    [8] => Array
                        (
                            [id] => 1959056
                            [name] => fn Дата создания заявки
                            [code] => 
                            [multiple] => N
                            [type_id] => 6
                            [disabled] => 0
                            [sort] => 506
                        )

                    [9] => Array
                        (
                            [id] => 1959058
                            [name] => fn Пакет участия
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 507
                            [enums] => Array
                                (
                                    [4689956] => Small
                                    [4689958] => Large
                                    [4689960] => XXL
                                )

                        )

                    [10] => Array
                        (
                            [id] => 1959060
                            [name] => fn Метод оплаты
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 508
                            [enums] => Array
                                (
                                    [4689962] => Visa/MasterCard
                                    [4689964] => Приват24
                                    [4689966] => Наличными
                                )

                        )

                    [11] => Array
                        (
                            [id] => 1961298
                            [name] => zk Метод оплаты
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 502
                            [enums] => Array
                                (
                                    [4692854] => Visa/MasterCard
                                    [4692856] => Приват24
                                    [4692858] => Наличными
                                )

                        )

                    [12] => Array
                        (
                            [id] => 1961300
                            [name] => zk Дивизион
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 503
                            [enums] => Array
                                (
                                    [4692860] => Easy Game
                                    [4692862] => Hard Game
                                )

                        )

                    [13] => Array
                        (
                            [id] => 1961302
                            [name] => zk Дата создания заявки
                            [code] => 
                            [multiple] => N
                            [type_id] => 6
                            [disabled] => 0
                            [sort] => 500
                        )

                    [14] => Array
                        (
                            [id] => 1961304
                            [name] => zk Источник заявки
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 505
                            [enums] => Array
                                (
                                    [4692864] => zhirkiller.com
                                    [4692866] => new site
                                )

                        )

                    [15] => Array
                        (
                            [id] => 1961592
                            [name] => zk Пакет участия
                            [code] => 
                            [multiple] => N
                            [type_id] => 4
                            [disabled] => 0
                            [sort] => 501
                            [enums] => Array
                                (
                                    [4693324] => STANDARD_10
                                    [4693326] => BONUS_10
                                    [4693328] => PRO_10
                                    [4693878] => STANDART
                                    [4693880] => BONUS
                                    [4693882] => PRO
                                )

                        )

                )

            [companies] => Array
                (
                    [0] => Array
                        (
                            [id] => 1651996
                            [name] => Телефон
                            [code] => PHONE
                            [multiple] => Y
                            [type_id] => 8
                            [disabled] => 0
                            [sort] => 4
                            [enums] => Array
                                (
                                    [3907964] => WORK
                                    [3907966] => WORKDD
                                    [3907968] => MOB
                                    [3907970] => FAX
                                    [3907972] => HOME
                                    [3907974] => OTHER
                                )

                        )

                    [1] => Array
                        (
                            [id] => 1651998
                            [name] => Email
                            [code] => EMAIL
                            [multiple] => Y
                            [type_id] => 8
                            [disabled] => 0
                            [sort] => 6
                            [enums] => Array
                                (
                                    [3907976] => WORK
                                    [3907978] => PRIV
                                    [3907980] => OTHER
                                )

                        )

                    [2] => Array
                        (
                            [id] => 1652000
                            [name] => Web
                            [code] => WEB
                            [multiple] => N
                            [type_id] => 7
                            [disabled] => 0
                            [sort] => 8
                        )

                    [3] => Array
                        (
                            [id] => 1652004
                            [name] => Адрес
                            [code] => ADDRESS
                            [multiple] => N
                            [type_id] => 9
                            [disabled] => 0
                            [sort] => 12
                        )

                )

            [customers] => Array
                (
                )

        )

    [note_types] => Array
        (
            [0] => Array
                (
                    [id] => 1
                    [name] => 
                    [code] => DEAL_CREATED
                    [editable] => N
                )

            [1] => Array
                (
                    [id] => 2
                    [name] => 
                    [code] => CONTACT_CREATED
                    [editable] => N
                )

            [2] => Array
                (
                    [id] => 3
                    [name] => 
                    [code] => DEAL_STATUS_CHANGED
                    [editable] => N
                )

            [3] => Array
                (
                    [id] => 4
                    [name] => 
                    [code] => COMMON
                    [editable] => Y
                )

            [4] => Array
                (
                    [id] => 5
                    [name] => 
                    [code] => ATTACHEMENT
                    [editable] => N
                )

            [5] => Array
                (
                    [id] => 6
                    [name] => 
                    [code] => CALL
                    [editable] => N
                )

            [6] => Array
                (
                    [id] => 7
                    [name] => 
                    [code] => MAIL_MESSAGE
                    [editable] => N
                )

            [7] => Array
                (
                    [id] => 8
                    [name] => 
                    [code] => MAIL_MESSAGE_ATTACHMENT
                    [editable] => N
                )

            [8] => Array
                (
                    [id] => 9
                    [name] => 
                    [code] => EXTERNAL_ATTACH
                    [editable] => N
                )

            [9] => Array
                (
                    [id] => 10
                    [name] => 
                    [code] => CALL_IN
                    [editable] => N
                )

            [10] => Array
                (
                    [id] => 11
                    [name] => 
                    [code] => CALL_OUT
                    [editable] => N
                )

            [11] => Array
                (
                    [id] => 12
                    [name] => 
                    [code] => COMPANY_CREATED
                    [editable] => N
                )

            [12] => Array
                (
                    [id] => 13
                    [name] => 
                    [code] => TASK_RESULT
                    [editable] => N
                )

            [13] => Array
                (
                    [id] => 17
                    [name] => 
                    [code] => CHAT
                    [editable] => N
                )

            [14] => Array
                (
                    [id] => 99
                    [name] => 
                    [code] => MAX_SYSTEM
                    [editable] => N
                )

            [15] => Array
                (
                    [id] => 101
                    [name] => Ссылка
                    [code] => DROPBOX
                    [editable] => N
                )

            [16] => Array
                (
                    [id] => 102
                    [name] => Входящее
                    [code] => SMS_IN
                    [editable] => N
                )

            [17] => Array
                (
                    [id] => 103
                    [name] => Исходящее
                    [code] => SMS_OUT
                    [editable] => N
                )

        )

    [task_types] => Array
        (
            [0] => Array
                (
                    [id] => 1
                    [name] => Связаться с клиентом
                    [code] => FOLLOW_UP
                )

            [1] => Array
                (
                    [id] => 1
                    [name] => Звонок
                    [code] => CALL
                )

            [2] => Array
                (
                    [id] => 2
                    [name] => Встреча
                    [code] => MEETING
                )

            [3] => Array
                (
                    [id] => 3
                    [name] => Письмо
                    [code] => LETTER
                )

            [4] => Array
                (
                    [id] => 445692
                    [name] => Выставить счет
                    [code] => 
                )

            [5] => Array
                (
                    [id] => 634866
                    [name] => Оплата
                    [code] => 
                )

        )

    [pipelines] => Array
        (
            [636370] => Array
                (
                    [id] => 636370
                    [value] => 636370
                    [label] => gorishki.zhirkiller
                    [name] => gorishki.zhirkiller
                    [sort] => 1
                    [is_main] => 1
                    [statuses] => Array
                        (
                            [15205261] => Array
                                (
                                    [id] => 15205261
                                    [name] => Новая заявка
                                    [pipeline_id] => 636370
                                    [sort] => 10
                                    [color] => #98cbff
                                    [editable] => Y
                                )

                            [15190978] => Array
                                (
                                    [id] => 15190978
                                    [name] => Письмо 1
                                    [pipeline_id] => 636370
                                    [sort] => 20
                                    [color] => #fffeb2
                                    [editable] => Y
                                )

                            [15190981] => Array
                                (
                                    [id] => 15190981
                                    [name] => Письмо 2
                                    [pipeline_id] => 636370
                                    [sort] => 30
                                    [color] => #fffd7f
                                    [editable] => Y
                                )

                            [15190984] => Array
                                (
                                    [id] => 15190984
                                    [name] => Письмо 3
                                    [pipeline_id] => 636370
                                    [sort] => 40
                                    [color] => #fff000
                                    [editable] => Y
                                )

                            [15191104] => Array
                                (
                                    [id] => 15191104
                                    [name] => Письмо 4
                                    [pipeline_id] => 636370
                                    [sort] => 50
                                    [color] => #ffeab2
                                    [editable] => Y
                                )

                            [15191107] => Array
                                (
                                    [id] => 15191107
                                    [name] => СМС + Письмо (последний шанс)
                                    [pipeline_id] => 636370
                                    [sort] => 60
                                    [color] => #ffdc7f
                                    [editable] => Y
                                )

                            [15191113] => Array
                                (
                                    [id] => 15191113
                                    [name] => Требует ответ от поддержки
                                    [pipeline_id] => 636370
                                    [sort] => 70
                                    [color] => #87f2c0
                                    [editable] => Y
                                )

                            [15192712] => Array
                                (
                                    [id] => 15192712
                                    [name] => В процессе оплаты (перевод)
                                    [pipeline_id] => 636370
                                    [sort] => 80
                                    [color] => #eb93ff
                                    [editable] => Y
                                )

                            [15192136] => Array
                                (
                                    [id] => 15192136
                                    [name] => Требует подтверждения оплаты
                                    [pipeline_id] => 636370
                                    [sort] => 90
                                    [color] => #ebffb1
                                    [editable] => Y
                                )

                            [15417058] => Array
                                (
                                    [id] => 15417058
                                    [name] => Клоны
                                    [pipeline_id] => 636370
                                    [sort] => 100
                                    [color] => #e6e8ea
                                    [editable] => Y
                                )

                            [142] => Array
                                (
                                    [id] => 142
                                    [name] => Успешно реализовано
                                    [color] => #CCFF66
                                    [sort] => 10000
                                    [editable] => N
                                    [pipeline_id] => 636370
                                )

                            [143] => Array
                                (
                                    [id] => 143
                                    [name] => Закрыто и не реализовано
                                    [color] => #D5D8DB
                                    [sort] => 11000
                                    [editable] => N
                                    [pipeline_id] => 636370
                                )

                        )

                    [leads] => 1375
                )

            [658216] => Array
                (
                    [id] => 658216
                    [value] => 658216
                    [label] => Отправка Эспандеров
                    [name] => Отправка Эспандеров
                    [sort] => 2
                    [is_main] => 
                    [statuses] => Array
                        (
                            [15376612] => Array
                                (
                                    [id] => 15376612
                                    [name] => Позвонить и сверить данные
                                    [pipeline_id] => 658216
                                    [sort] => 10
                                    [color] => #ff8f92
                                    [editable] => Y
                                )

                            [15376615] => Array
                                (
                                    [id] => 15376615
                                    [name] => Отправить эспандер
                                    [pipeline_id] => 658216
                                    [sort] => 20
                                    [color] => #eb93ff
                                    [editable] => Y
                                )

                            [15376618] => Array
                                (
                                    [id] => 15376618
                                    [name] => Отправлен новой почтой
                                    [pipeline_id] => 658216
                                    [sort] => 30
                                    [color] => #ffcc66
                                    [editable] => Y
                                )

                            [15535032] => Array
                                (
                                    [id] => 15535032
                                    [name] => Проблемные
                                    [pipeline_id] => 658216
                                    [sort] => 40
                                    [color] => #f9deff
                                    [editable] => Y
                                )

                            [142] => Array
                                (
                                    [id] => 142
                                    [name] => Успешно реализовано
                                    [color] => #CCFF66
                                    [sort] => 10000
                                    [editable] => N
                                    [pipeline_id] => 658216
                                )

                            [143] => Array
                                (
                                    [id] => 143
                                    [name] => Закрыто и не реализовано
                                    [color] => #D5D8DB
                                    [sort] => 11000
                                    [editable] => N
                                    [pipeline_id] => 658216
                                )

                        )

                    [leads] => 160
                )

            [669865] => Array
                (
                    [id] => 669865
                    [value] => 669865
                    [label] => Орифлейм
                    [name] => Орифлейм
                    [sort] => 3
                    [is_main] => 
                    [statuses] => Array
                        (
                            [15476785] => Array
                                (
                                    [id] => 15476785
                                    [name] => Новая заявка
                                    [pipeline_id] => 669865
                                    [sort] => 10
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [15477013] => Array
                                (
                                    [id] => 15477013
                                    [name] => В процессе оплаты
                                    [pipeline_id] => 669865
                                    [sort] => 20
                                    [color] => #fff000
                                    [editable] => Y
                                )

                            [15493552] => Array
                                (
                                    [id] => 15493552
                                    [name] => Требует ответ от поддержки
                                    [pipeline_id] => 669865
                                    [sort] => 30
                                    [color] => #87f2c0
                                    [editable] => Y
                                )

                            [15539526] => Array
                                (
                                    [id] => 15539526
                                    [name] => Оплачен
                                    [pipeline_id] => 669865
                                    [sort] => 40
                                    [color] => #ebffb1
                                    [editable] => Y
                                )

                            [142] => Array
                                (
                                    [id] => 142
                                    [name] => Добавлен в ЛК
                                    [color] => #CCFF66
                                    [sort] => 10000
                                    [editable] => N
                                    [pipeline_id] => 669865
                                )

                            [143] => Array
                                (
                                    [id] => 143
                                    [name] => Закрыто и не реализовано
                                    [color] => #D5D8DB
                                    [sort] => 11000
                                    [editable] => N
                                    [pipeline_id] => 669865
                                )

                        )

                    [leads] => 143
                )

            [694752] => Array
                (
                    [id] => 694752
                    [value] => 694752
                    [label] => Формы в Норме 2.0
                    [name] => Формы в Норме 2.0
                    [sort] => 4
                    [is_main] => 
                    [statuses] => Array
                        (
                            [15692853] => Array
                                (
                                    [id] => 15692853
                                    [name] => Новая заявка
                                    [pipeline_id] => 694752
                                    [sort] => 10
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [17202039] => Array
                                (
                                    [id] => 17202039
                                    [name] => Новая заявка наличка
                                    [pipeline_id] => 694752
                                    [sort] => 20
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [15692856] => Array
                                (
                                    [id] => 15692856
                                    [name] => Письмо 1
                                    [pipeline_id] => 694752
                                    [sort] => 30
                                    [color] => #fffeb2
                                    [editable] => Y
                                )

                            [15692859] => Array
                                (
                                    [id] => 15692859
                                    [name] => Письмо 2
                                    [pipeline_id] => 694752
                                    [sort] => 40
                                    [color] => #fffd7f
                                    [editable] => Y
                                )

                            [15692862] => Array
                                (
                                    [id] => 15692862
                                    [name] => Письмо 3
                                    [pipeline_id] => 694752
                                    [sort] => 50
                                    [color] => #fff000
                                    [editable] => Y
                                )

                            [15692865] => Array
                                (
                                    [id] => 15692865
                                    [name] => Письмо 4
                                    [pipeline_id] => 694752
                                    [sort] => 60
                                    [color] => #ffeab2
                                    [editable] => Y
                                )

                            [15692868] => Array
                                (
                                    [id] => 15692868
                                    [name] => письмо последний шанс
                                    [pipeline_id] => 694752
                                    [sort] => 70
                                    [color] => #ffdc7f
                                    [editable] => Y
                                )

                            [17373021] => Array
                                (
                                    [id] => 17373021
                                    [name] => Письмо Последний шанс 2.0
                                    [pipeline_id] => 694752
                                    [sort] => 80
                                    [color] => #eb93ff
                                    [editable] => Y
                                )

                            [15863901] => Array
                                (
                                    [id] => 15863901
                                    [name] => Не оплаченные
                                    [pipeline_id] => 694752
                                    [sort] => 90
                                    [color] => #ffc8c8
                                    [editable] => Y
                                )

                            [15692871] => Array
                                (
                                    [id] => 15692871
                                    [name] => Требует ответа от поддержки
                                    [pipeline_id] => 694752
                                    [sort] => 100
                                    [color] => #87f2c0
                                    [editable] => Y
                                )

                            [15692877] => Array
                                (
                                    [id] => 15692877
                                    [name] => Требует подтверждения оплаты
                                    [pipeline_id] => 694752
                                    [sort] => 110
                                    [color] => #ebffb1
                                    [editable] => Y
                                )

                            [15692880] => Array
                                (
                                    [id] => 15692880
                                    [name] => Клоны
                                    [pipeline_id] => 694752
                                    [sort] => 120
                                    [color] => #f2f3f4
                                    [editable] => Y
                                )

                            [142] => Array
                                (
                                    [id] => 142
                                    [name] => Успешно реализовано
                                    [color] => #CCFF66
                                    [sort] => 10000
                                    [editable] => N
                                    [pipeline_id] => 694752
                                )

                            [143] => Array
                                (
                                    [id] => 143
                                    [name] => Закрыто и не реализовано
                                    [color] => #D5D8DB
                                    [sort] => 11000
                                    [editable] => N
                                    [pipeline_id] => 694752
                                )

                        )

                    [leads] => 11453
                )

            [746421] => Array
                (
                    [id] => 746421
                    [value] => 746421
                    [label] => Жиркиллер 5 сезон
                    [name] => Жиркиллер 5 сезон
                    [sort] => 5
                    [is_main] => 
                    [statuses] => Array
                        (
                            [16148169] => Array
                                (
                                    [id] => 16148169
                                    [name] => Новая заявка
                                    [pipeline_id] => 746421
                                    [sort] => 10
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [16148172] => Array
                                (
                                    [id] => 16148172
                                    [name] => Письмо 1
                                    [pipeline_id] => 746421
                                    [sort] => 20
                                    [color] => #fffeb2
                                    [editable] => Y
                                )

                            [16148175] => Array
                                (
                                    [id] => 16148175
                                    [name] => Письмо 2
                                    [pipeline_id] => 746421
                                    [sort] => 30
                                    [color] => #fffd7f
                                    [editable] => Y
                                )

                            [16148214] => Array
                                (
                                    [id] => 16148214
                                    [name] => Письмо 3
                                    [pipeline_id] => 746421
                                    [sort] => 40
                                    [color] => #fff000
                                    [editable] => Y
                                )

                            [16148217] => Array
                                (
                                    [id] => 16148217
                                    [name] => Письмо 4
                                    [pipeline_id] => 746421
                                    [sort] => 50
                                    [color] => #ffeab2
                                    [editable] => Y
                                )

                            [16431819] => Array
                                (
                                    [id] => 16431819
                                    [name] => перевод
                                    [pipeline_id] => 746421
                                    [sort] => 60
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [16467315] => Array
                                (
                                    [id] => 16467315
                                    [name] => Промеж. письмо
                                    [pipeline_id] => 746421
                                    [sort] => 70
                                    [color] => #fffd7f
                                    [editable] => Y
                                )

                            [16468506] => Array
                                (
                                    [id] => 16468506
                                    [name] => Промеж СМС
                                    [pipeline_id] => 746421
                                    [sort] => 80
                                    [color] => #fffeb2
                                    [editable] => Y
                                )

                            [16506807] => Array
                                (
                                    [id] => 16506807
                                    [name] => 3 дня до старта
                                    [pipeline_id] => 746421
                                    [sort] => 90
                                    [color] => #fffeb2
                                    [editable] => Y
                                )

                            [16529748] => Array
                                (
                                    [id] => 16529748
                                    [name] => 1 день до старта
                                    [pipeline_id] => 746421
                                    [sort] => 100
                                    [color] => #ffce5a
                                    [editable] => Y
                                )

                            [16148223] => Array
                                (
                                    [id] => 16148223
                                    [name] => СМС послед. шанс
                                    [pipeline_id] => 746421
                                    [sort] => 110
                                    [color] => #fffeb2
                                    [editable] => Y
                                )

                            [16148226] => Array
                                (
                                    [id] => 16148226
                                    [name] => Требует ответа от поддержки
                                    [pipeline_id] => 746421
                                    [sort] => 120
                                    [color] => #87f2c0
                                    [editable] => Y
                                )

                            [16148229] => Array
                                (
                                    [id] => 16148229
                                    [name] => В процессе оплаты (перевод)
                                    [pipeline_id] => 746421
                                    [sort] => 130
                                    [color] => #eb93ff
                                    [editable] => Y
                                )

                            [16148232] => Array
                                (
                                    [id] => 16148232
                                    [name] => Требует подтверждения оплаты
                                    [pipeline_id] => 746421
                                    [sort] => 140
                                    [color] => #ebffb1
                                    [editable] => Y
                                )

                            [16148235] => Array
                                (
                                    [id] => 16148235
                                    [name] => Клоны
                                    [pipeline_id] => 746421
                                    [sort] => 150
                                    [color] => #f2f3f4
                                    [editable] => Y
                                )

                            [142] => Array
                                (
                                    [id] => 142
                                    [name] => Успешно реализовано
                                    [color] => #CCFF66
                                    [sort] => 10000
                                    [editable] => N
                                    [pipeline_id] => 746421
                                )

                            [143] => Array
                                (
                                    [id] => 143
                                    [name] => Закрыто и не реализовано
                                    [color] => #D5D8DB
                                    [sort] => 11000
                                    [editable] => N
                                    [pipeline_id] => 746421
                                )

                        )

                    [leads] => 3629
                )

            [932001] => Array
                (
                    [id] => 932001
                    [value] => 932001
                    [label] => New funnel
                    [name] => New funnel
                    [sort] => 6
                    [is_main] => 
                    [statuses] => Array
                        (
                            [17902962] => Array
                                (
                                    [id] => 17902962
                                    [name] => Новая заявка
                                    [pipeline_id] => 932001
                                    [sort] => 10
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [17902965] => Array
                                (
                                    [id] => 17902965
                                    [name] => новая заявка (Оплата наличными)
                                    [pipeline_id] => 932001
                                    [sort] => 20
                                    [color] => #ffff99
                                    [editable] => Y
                                )

                            [17903028] => Array
                                (
                                    [id] => 17903028
                                    [name] => Письмо 1
                                    [pipeline_id] => 932001
                                    [sort] => 30
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [17903031] => Array
                                (
                                    [id] => 17903031
                                    [name] => письмо 2
                                    [pipeline_id] => 932001
                                    [sort] => 40
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [17903034] => Array
                                (
                                    [id] => 17903034
                                    [name] => письмо 3
                                    [pipeline_id] => 932001
                                    [sort] => 50
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [17902968] => Array
                                (
                                    [id] => 17902968
                                    [name] => Требует ответ от поддержки
                                    [pipeline_id] => 932001
                                    [sort] => 60
                                    [color] => #ffcc66
                                    [editable] => Y
                                )

                            [17903025] => Array
                                (
                                    [id] => 17903025
                                    [name] => ТРЕБУЕТ ПОДТВЕРЖДЕНИЯ ОПЛАТЫ
                                    [pipeline_id] => 932001
                                    [sort] => 70
                                    [color] => #99ccff
                                    [editable] => Y
                                )

                            [142] => Array
                                (
                                    [id] => 142
                                    [name] => Успешно реализовано
                                    [color] => #CCFF66
                                    [sort] => 10000
                                    [editable] => N
                                    [pipeline_id] => 932001
                                )

                            [143] => Array
                                (
                                    [id] => 143
                                    [name] => Закрыто и не реализовано
                                    [color] => #D5D8DB
                                    [sort] => 11000
                                    [editable] => N
                                    [pipeline_id] => 932001
                                )

                        )

                    [leads] => 0
                )

        )

    [timezoneoffset] => +02:00
)
