from os import listdir
from os.path import isfile, join
onlyfiles = [f for f in listdir('./') if isfile(join('./', f))]
onlyfiles.sort()

factions = ['gbr', 'rus', 'us', 'ger', 'jpn', 'ita', 'hun', 'swe']

for faction in factions:
    for f in onlyfiles:
        if not f.endswith('.png'):
            continue
        if not f.lower().startswith(faction):
            continue
        print(r'            <img width="2%" src="images/unitpics/' + f + r'" alt="' + f[:-4] + r'">')
