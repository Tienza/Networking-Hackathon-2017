{-# LANGUAGE OverloadedStrings #-}

import Database.MySQL.Simple
import Data.List
import Data.List.Split

main = do
  file <- getContents
  let numLines = length $ lines file
  let dataList = chunksOf (numLines `div` 5) (lines file)
  conn <- connect defaultConnectInfo 
    { connectUser = "root",
      connectPassword = "FredFredBurger",
      connectDatabase = "networkData"
    }
  mapM_ (insertInto stmt conn) (transpose dataList) 


stmt :: Query
stmt = "insert into Networks (SSID, MacAddr, Frequency, Quality, Strength) values (?,?,?,?,?)" 

insertInto :: Query -> Connection -> [String] -> IO ()
insertInto stmt conn xs = do
  execute conn stmt [(xs !! 4),(xs !! 0),(xs !! 1),(xs !! 2),(xs !! 3)]
  close conn
