#学校でアドバイスもらったので修正
import os
import sys
try:
    from remo import NatureRemoAPI
except ModuleNotFoundError as e:
    print(f"モジュールエラー\npip install -U nature-remo\nこのコマンドを実行し、必要なモジュールをインストールしてください {e}")
    sys.exit(1)

if not os.path.isfile("nature_remo_token.txt"):
    token = input("トークンを入力:")
    with open("nature_remo_token.txt", mode="w", encoding="utf-8") as f:
        f.write(token)

with open("nature_remo_token.txt", mode="r", encoding="utf-8") as f:
    api = NatureRemoAPI(f.read())

devices = api.get_devices()
appliances = api.get_appliances()

modes = ["温度表示", "登録家電表示", "エアコンON", "エアコンOFF", "ライトOFF", "ライトON"]

print("何をしますか？")
for number, mode in enumerate(modes):
    print(number + 1, ":", mode)

while True:
    user_type = input("入力待機:")
    if user_type.isdecimal():
        number = int(user_type)

    if number == 1:
        try:
            print("温度",devices[0].newest_events['te'].val)
        except KeyError:
            print("温度を取得出来ませんでした。")
            break

        try:
            print("湿度", devices[0].newest_events['hu'].val)
            print("照度", devices[0].newest_events['il'].val ,"(独自表記)")
            print("人感センサー", devices[0].newest_events['mo'].val)
            break
        except KeyError:
            print("その他情報を取得できませんでした。（miniなどの廉価版だと非対応です）")
            break
    elif number == 2:
        print("登録されている家電")
        for appliance in appliances:
            print(appliance.type)
    elif number == 3:
        hot_or_cool = input("1: 冷房 2: 暖房")
        hot_or_cool_user_type = int(hot_or_cool)
        if hot_or_cool_user_type == 1:
            temp = input("温度は？")
            api.update_aircon_settings(appliances[0].id, operation_mode='cool', temperature=int(temp))
            print("完了")
        elif hot_or_cool_user_type == 2:
            temp = input("温度は？")
            api.update_aircon_settings(appliances[0].id, operation_mode='warm', temperature=int(temp))
            print("完了")
            break
    elif number == 4:
        api.update_aircon_settings(appliances[0].id, button="power-off")
        print("完了")
        break
    elif number == 5:
        api.send_light_infrared_signal(appliances[1].id, 'off')
        print("完了")
        break
    elif number == 6:
        api.send_light_infrared_signal(appliances[1].id, 'on')
        print("完了")
        break
    else:
        print("値の範囲外です。")


#https://www.headboost.jp/python-if-not/
