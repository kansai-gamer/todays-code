import sys
try:
    from remo import NatureRemoAPI
except ModuleNotFoundError:
    print("モジュールエラー")
    print("pip install -U nature-remo")
    print("このコマンドを実行し、必要なモジュールをインストールしてください")
    sys.exit(1)

#↓を消して12行のapiのとこを api = NatureRemoAPI("testtoken")みたいに書き換えればおｋ
token = input("トークン入力(入力面倒な人はソースコード書き換えて):")
api = NatureRemoAPI(token)

devices = api.get_devices()
appliances = api.get_appliances()

print("何をしますか？")
print("1: 温度表示")
print("2: 登録家電表示")
print("3: エアコンON")
print("4: エアコンOFF")

while True:
    user_type = input("入力待機:")
    try:
        number = int(user_type)
    except ValueError:
        print("正しい値を入力してください")

    if number == 1:
        try:
            print("温度",devices[0].newest_events['te'].val)
        except KeyError:
            print("取得出来ませんでした。")
            break

        try:
            print("湿度", devices[0].newest_events['hu'].val)
            print("照度", devices[0].newest_events['il'].val ,"(独自表記)")
            print("人感センサー", devices[0].newest_events['mo'].val)
            break
        except KeyError:
            print("取得できませんでした。")
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
    else:
        print("値の範囲外です。")

