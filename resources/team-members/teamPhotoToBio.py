#!/Library/Frameworks/Python.framework/Versions/3.5/bin/python3
import sys
from os import listdir,rename
import re
# from os.path import isfile, join

photoFolder = '/team-members-md';
bioFolder = '/team-member-bios';
oldFound = 0;
newAdded = 0;
class BioList:
    """A class that hold all the bios"""
    #bios that have not yet been matched with a photo
    unaccounted = listdir(sys.argv[1] + bioFolder);
    #bios that were matched with a photo
    accounted = [];
    #bios that do not exist but should
    toAdd = [];
    def accountFor(self, bioName):
        #Find the bio with this name in the list of bios and marks it as
        #accounted for. If it cannot find it, adds it to the list of things to
        #add.
        foundit = False;
        for b in self.unaccounted:
            m1 = re.search(r'(.+)\.NEW\.[^\.]+$',b)
            m2 = re.search(r'(.+)\.[^\.]+$',b)
            if m1 is not None:
                if m1.group(1) == bioName:
                    foundit = True
            if m2 is not None:
                if m2.group(1) == bioName:
                    foundit = True
            if foundit:
                self.unaccounted.remove(b);
                self.accounted.append(b);
                break;
        if not foundit:
            self.toAdd.append(bioName+".NEW.html");
        
if __name__ == '__main__':
    if len(sys.argv) == 1:
        print('Please pass in the folder location where '+photoFolder+\
        ' and '+bioFolder+' are located');
        sys.exit(-1);
    photos = listdir(sys.argv[1] + photoFolder);
    bios = BioList();
    #first checks for a bio for every photo
    for p in photos:
        m = re.search(r'(.+)\.[^\.]+',p)
        if (m == None or m.group(0).find('.') == 0):
            continue;
        pName = m.group(1)
        bios.accountFor(pName);
    #now deal with the bios to add and to mark for removal
    for b in bios.unaccounted:
        if b.find(".") == 0:
            continue;
        if b[-4:] != ".OLD":
            path = sys.argv[1]+bioFolder+"/";
            print("Found bio without photo: "+b);
            oldFound += 1;
            rename(path+b, path+b+".OLD");
    for b in bios.toAdd:
        path = sys.argv[1]+bioFolder+"/"+b;
        open(path,'a');
        print("Added a needed bio: "+b);
        newAdded += 1;
    #prints finally summary
    print("****************************")
    print("Looked in "+sys.argv[1] + photoFolder)
    print(str(len(photos)) + " files searched")
    print("Added " + str(newAdded) + " new bios.")
    print("Found " + str(oldFound) + " unneeded bios.")







